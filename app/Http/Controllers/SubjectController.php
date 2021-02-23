<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Illuminate\Support\Facades\Hash;
use App\User;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $subjects = Subject::all();
        return view('backend.subject.revsubject',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.subject.subjectadd');
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
           
            'subject'  => ['required','string'],
           
        ]);
     
        

        $subject = new Subject;
        $subject->name = $request->name;
        $subject->subject = $request->subject;
  
        $subject->save();
        return redirect()->route('backendsubject.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request,Subject $subject)
    {

         $subject = Subject::Find($id);
         return view('backend.subject.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Subject $subject)
    {
         $subject = Subject::Find($id);
         $request->validate([
            'name'=>'required',
            'subject' => 'required'
        ]);

         

     
        $subject->name = $request->name;
        $subject->subject = $request->subject;   
        $subject->save();

       
        return redirect()->route('backendsubject.index')->with('msg','Successfully Update Subject');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request,Subject $subject)
    {
        $subject = Subject::Find($id);
        $subject->delete();
        return redirect()->route('backendsubject.index')->with('msg','Successfully deleted Subject');
    }
}
