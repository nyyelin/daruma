<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addjournalvideo;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Journalvideo;

class BackendaddjournalvideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $addjournalvideos = Addjournalvideo::all();
        return view('backend.journalvideo.journalcollection',compact('addjournalvideos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.journalvideo.journalcollectionadd');
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
            'auth_name'  => ['required', 'string', 'max:255'],
             'header'  => ['required', 'string', 'max:255'],
            'dob'=>['required','date'],
            'subject'  => ['required','string'],
           
        ]);
     
        

        if($request->hasfile('profile')){
            $name = time().'_'.$request->profile->getClientOriginalName();
            $filepath = $request->file('profile')->storeAs('profile',$name,'public');
            $photo = "/storage/".$filepath;
        }else{
            $photo = "profile/profile_1.png";
        }

         

        $addjournalvideo = new Addjournalvideo;
        $addjournalvideo->detail_id = $request->journalvideo_id;
        $addjournalvideo->auth_name = $request->auth_name;
        $addjournalvideo->header = $request->header;
        $addjournalvideo->dob = $request->dob;
        $addjournalvideo->photo = $photo;
        $addjournalvideo->subject = $request->subject;
      
        $addjournalvideo->save();
        return redirect()->route('backendaddjournalvideo.index');
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
    public function edit(Addjournalvideo $addjournalvideo)
    {
         $addjournalvideos = Addjournalvideo::all();
    
         return view('backend.journalvideo.edit',compact('addjournalvideos','addjournalvideo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Addjournalvideo $addjournalvideo)
    {
        $request->validate([
            'auth_name'=>'required',
            'header'=>'required',
            'dob'=>'required',
            'subject'=>'required'
            
        ]);

         if($request->hasfile('profile')){
            $name = time().'_'.$request->profile->getClientOriginalName();
            $filepath = $request->file('profile')->storeAs('profile',$name,'public');
            $photo = "/storage/".$filepath;
        }else{
            $photo = "profile/profile_1.png";
        }




                




            
        $addjournalvideo->detail_id = $addjournalvideo->journalvideo->id;
        $addjournalvideo->auth_name = $request->auth_name;
        $addjournalvideo->header = $request->header;
        $addjournalvideo->dob = $request->dob;
        $addjournalvideo->subject = $request->subject;
        $addjournalvideo->photo = $request->photo;
      
        $addjournalvideo->save();

       
        return redirect()->route('backendaddjournalvideo.index')->with('msg','Successfully Update Journal Or Video');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Addjournalvideo $addjournalvideo)
    {
          $addjournalvideo->delete();
        return redirect()->route('backendaddjournalvideo.index')->with('msg','Successfully deleted Journal Or Video');
    }
}
