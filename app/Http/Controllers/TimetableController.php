<?php
namespace App\Http\Controllers;

use App\Timetable;
use Illuminate\Http\Request;
use App\Level;
use App\Day;
use Carbon;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Resources\TimetableResource;


class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timetables = Timetable::whereMonth('start_date',Carbon\Carbon::now()->month)->orderBy('start_date','DESC')->get();
        return view('backend.timetable.index',compact('timetables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = Level::orderBy('id','DESC')->get();
        $days = Day::all();
        return view('backend.timetable.create',compact('levels','days'));
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
            'name'=>'required',
            'startdate' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'fee' => 'required',
            'duration' => 'required',
            'startdate' => 'required',
            
        ]);

        $timetable = new Timetable;
        $timetable->name = $request->name;
        $timetable->start_date = $request->startdate;
        $timetable->end_date = $request->enddate;

        $timetable->start_time = $request->start_time;
        $timetable->end_time = $request->end_time;
        $timetable->fees = $request->fee;
        $timetable->duration = $request->duration;
        $timetable->description = $request->description;
        $timetable->status = $request->class_type;
        $timetable->level_id = $request->level;
        $timetable->save();

        $timetable->days()->attach($request->day);
        return redirect()->route('timetables.index')->with('msg','Successfully added Timetable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function show(Timetable $timetable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function edit(Timetable $timetable)
    {
        $levels = Level::orderBy('id','DESC')->get();
        $days = Day::all();
        return view('backend.timetable.edit',compact('levels','days','timetable'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timetable $timetable)
    {
        $request->validate([
            'name'=>'required',
            'startdate' => 'required',
            'enddate' => 'required',

            'start_time' => 'required',
            'end_time' => 'required',
            'fee' => 'required',
            'duration' => 'required'
        ]);

        // $timetable = new Timetable;
        $timetable->name = $request->name;
        $timetable->start_date = $request->startdate;
        $timetable->start_time = $request->start_time;
        $timetable->end_date = $request->enddate;

        $timetable->end_time = $request->end_time;
        $timetable->fees = $request->fee;
        $timetable->duration = $request->duration;
        $timetable->description = $request->description;
        $timetable->status = $request->class_type;
        $timetable->level_id = $request->level;
        $timetable->save();

        $timetable->days()->detach();
        $timetable->days()->attach($request->day);

        return redirect()->route('timetables.index')->with('msg','Successfully added Timetable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timetable $timetable)
    {
        $timetable->delete();
        return redirect()->route('timetables.index')->with('msg','Successfully deleted Timetable');

    }

    public function getalltimetable($value='')
    {
        $timetables = Timetable::orderBy('start_date','DESC')->get();
        $mydata =  TimetableResource::collection($timetables);

        return Datatables::of($mydata)->addIndexColumn()->toJson(); 
    }


    public function getdata(Request $request)
    {
        // dd($request);
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $timetables = Timetable::where('start_date','>=',$start_date)->where('start_date','<=',$end_date)->with('level')->with('days')->get();

        $mydata =  TimetableResource::collection($timetables);

        return Datatables::of($mydata)->addIndexColumn()->toJson(); 
    }
}
