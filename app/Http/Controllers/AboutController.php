<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Illuminate\Support\Facades\Hash;
use App\User;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $abouts = About::all();
        return view('backend.about.backendabout',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('backend.about.aboutadd');
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
     
        

        if($request->hasfile('profile')){
            $name = time().'_'.$request->profile->getClientOriginalName();
            $filepath = $request->file('profile')->storeAs('profile',$name,'public');
            $photo = "/storage/".$filepath;
        }else{
            $photo = "profile/profile_1.png";
        }

        $about = new About;
        $about->name = $request->name;
        $about->subject = $request->subject;
        $about->photo = $photo;
        $about->save();
        return redirect()->route('backendabout.index');
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
    public function edit($id,Request $request,About $about)
    {
       
        $about = About::Find($id);
         return view('backend.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request,About $about)
    {

        $about = About::Find($id);

         $request->validate([
            'name'=>'required',
            'subject' => 'required'
            
        ]);

       
          if($request->hasfile('profile')){
            $name = time().'_'.$request->profile->getClientOriginalName();
            $filepath = $request->file('profile')->storeAs('profile',$name,'public');
            $photo = "/storage/".$filepath;
        }else{
            $photo = request('oldimage');
        }

       
        $about->name = $request->name;
        $about->subject = $request->subject;
        $about->photo = $photo;
        
        $about->save();

       
        return redirect()->route('backendabout.index')->with('msg','Successfully Update About');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request,About $about)
    {

        $about = About::Find($id);

        $about->delete();
        return redirect()->route('backendabout.index')->with('msg','Successfully deleted About');
    }
}
