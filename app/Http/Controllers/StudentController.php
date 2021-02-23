<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\Level;
use App\Timetable;
use Carbon;
use App\Day;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Payment;
use App\User;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $levels = Level::orderBy('id','DESC')->get();
        return view('backend.student.index',compact('students','levels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = Level::orderBy('id','DESC')->get();
        $timetables = Timetable::where('start_date','>=',Carbon\Carbon::today())->where('level_id',5)->get();
        $days = Day::all();
        return view('backend.student.newstudent',compact('levels','timetables','days'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|unique:users',
            'password' => 'confirmed|min:8',
            ]);
        $codeno = date('Y').rand(1000000,100);;
        // dd($request);
        $user = new User;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->save();
        $user->assignRole('student');

        $student = new Student;
        $student->codeno = $codeno;
        $student->user_id = $user->id;
        $student->photo = 'profile/profile_1.png';
        $student->address = $request->address;
        $student->dob = $request->dob;
        $student->save();

        $student->timetables()->attach($request->timetable,['status'=>'Active']);

        $payment = new Payment;
        $payment->student_id = $student->id;
        $payment->timetable_id = $request->timetable;
        $payment->amount = $request->installment;
        $payment->status = $request->paymenttype;
        $payment->staff_id = 1; //Auth::user()->staff->id
        $payment->save();

        return redirect()->route('students.index')->with('success','New Student added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('backend.student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('backend.student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'password' => 'sometimes|confirmed',
            ]);
        
        $student->user->name = $request->name;
        $student->user->phone = $request->phone;
        $student->user->password = Hash::make($request->password);
        $student->user->email = $request->email;
        $student->user->save();

        $student->dob = $request->dob;
        $student->address = $request->address;
        $student->save();

        return redirect()->route('students.show',compact('student'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        foreach ($student->timetables as $timetable) {
           $timetable->pivot->deleted_at = Carbon\Carbon::today();
           $timetable->pivot->save();
        }
        return redirect()->route('students.index')->with('msg','Successfully deleted');
    }

    public function gettimetablebylevel(Request $request)
    {
       $level_id = $request->level_id;
       $timetables = Timetable::where('level_id',$level_id)->whereDate('start_date','>=',Carbon\Carbon::today())->with('days')->get();

       return response()->json($timetables);
    }

    public function getdatabytimetable(Request $request)
    {
        $timetable_id = $request->id;
        $timetables = Timetable::where('id',$timetable_id)->with('days')->first();
        $days = Day::all();
        $data = ['timetables' => $timetables,
                 'days' => $days, ];
        return response()->json($data);
    }

    public function deletestudenttimetable(Request $request)
    {
        $student_id = $request->student_id;
        $timetable_id = $request->timetable_id;
        $timetable = Timetable::find($timetable_id);
        $timetable->students()->updateExistingPivot($student_id,['status'=>'Deactive']);
        return "ok";
    }

    public function old_student($value='')
    {
        $levels = Level::orderBy('id','DESC')->get();
        $timetables = Timetable::where('start_date','>=',Carbon\Carbon::today())->where('level_id',5)->get();
        $days = Day::all();
        return view('backend.student.oldstudent',compact('levels','timetables','days'));
    }

    public function getstudentbycodeno(Request $request)
    {
        $codeno = $request->codeno;
        $student = Student::where('codeno',$codeno)->with(array('timetables'=>function($q){
            $q->wherePivot('status','Active');
        }))->with('user')->first();
        $levels = Level::orderBy('id','DESC')->get();
        $data = ['student'=>$student,
                 'levels' => $levels];

        return response()->json($data);
    }

    public function oldstudentstore(Request $request)
    {
        $request->validate([
            'codeno' => 'required',
            'name' => 'required',
            'phone' => 'required',
        ]);

        $student = Student::where('codeno',$request->codeno)->first();
        $student->user->name = $request->name;
        $student->user->email = $request->email;
        $student->user->phone = $request->phone;
        $student->user->save();
        $student->address = $request->address;
        $student->dob = $request->dob;
        $student->save();

        $student->timetables()->attach($request->timetable,['status'=>'Active']);

        $payment = new Payment;
        $payment->student_id = $student->id;
        $payment->timetable_id = $request->timetable;
        if($request->installment){
            $payment->amount = $request->installment;
        }else{
            $payment->amount = 0;
        }
        $payment->discount = $request->discount;
        $payment->note = $request->note;
        $payment->status = $request->paymenttype;
        $payment->staff_id = 1; //Auth::user()->staff->id
        $payment->save();
        return redirect()->route('students.index')->with('success','Successfully added');

    }

    public function getstudentlist(Request $request)
    {
        $level_id = $request->level_id;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $level = Level::find($level_id);
        $timetables = Timetable::where('level_id',$level_id)->where('start_date','>=',$start_date)->where('start_date','<=',$end_date)->with('students.user')->with('days')->with('level')->get();
        $data = ['timetables' => $timetables,
                 'level' => $level];
        return response()->json($data);
    }

    public function getstudentinstallment(Request $request)
    {
        $student_id = $request->student_id;
        $timetable_id = $request->timetable_id;
        $student = Student::where('id',$student_id)->with(array('payments'=>function($query) use ($timetable_id){
            $query->where('timetable_id',$timetable_id)->with('timetable');
        }))->first();
        return response()->json($student);
    }
}
