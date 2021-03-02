<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('backend.staff.index',compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'email'  => ['required','string','email','max:255','unique:users'],
            'password'  => ['required','min:8','confirmed'],
            'phoneno'  => ['required'],
            'address'  => ['required','string'],
            'dob'=>['required','date'],
            
        ]);
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phoneno;
        $user->save();
        $user->assignRole('staff');

        if($request->hasfile('profile')){
            $name = time().'_'.$request->profile->getClientOriginalName();
            $filepath = $request->file('profile')->storeAs('profile',$name,'public');
            $photo = "/storage/".$filepath;
        }else{
            $photo = "profile/profile_1.png";
        }

        $staff = new Staff;
        $staff->user_id = $user->id;
        $staff->address = $request->address;
        $staff->dob = $request->dob;
        $staff->photo = $photo;
        $staff->designation = $request->designation;
        $staff->save();
        return redirect()->route('staffs.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('backend.staff.edit',compact('staff'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {

        $validator = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'phoneno'  => ['required'],
            'address'  => ['required','string'],
            'dob'=>['required','date'],
           
        ]);
        
       
        $staff->user->name = $request->name;
        $staff->user->email = $request->email;
        // $user->password = Hash::make($request->password);
        $staff->user->phone = $request->phoneno;
        $staff->user->save();
        $staff->user->assignRole('staff');

        if($request->hasfile('new_photo')){
            $name = time().'_'.$request->new_photo->getClientOriginalName();
            $filepath = $request->file('new_photo')->storeAs('profile',$name,'public');
            $photo = "/storage/".$filepath;
        }else{
            $photo = $request->old_photo;
        }

        
        $staff->user_id = $staff->user->id;
        $staff->address = $request->address;
        $staff->dob = $request->dob;
        $staff->photo = $photo;
        $staff->designation = $request->designation;
        $staff->save();
        return redirect()->route('staffs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->route('staffs.index');

    }

    public function staff_update(Request $request)
    {
       $validator = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'phone'  => ['required'],
            'address'  => ['required','string'],
            'dob'=>['required','date'],
           
        ]);

        $staff = Staff::find(Auth::user()->staff->id);
        // dd($request);
       
        $staff->user->name = $request->name;
        $staff->user->email = $request->email;
        $staff->user->password = Hash::make($request->password);
        $staff->user->phone = $request->phone;
        $staff->user->save();
        // $staff->user->assignRole('staff');

        if($request->hasfile('new_photo')){
            $name = time().'_'.$request->new_photo->getClientOriginalName();
            $filepath = $request->file('new_photo')->storeAs('profile',$name,'public');
            $photo = "/storage/".$filepath;
        }else{
            $photo = $request->old_photo;
        }

        $staff->user_id = $staff->user->id;
        $staff->address = $request->address;
        $staff->dob = $request->dob;
        $staff->photo = $photo;
        $staff->save();
        return redirect()->back()->with('msg','Successfully update');
    }

   
}
