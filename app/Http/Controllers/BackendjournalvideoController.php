<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journalvideo;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Addjournalvideo;


class BackendjournalvideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $journalvideos = Journalvideo::all();
    
        return view('backend.journalvideo.backjournalvideo',compact('journalvideos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

           

           
        ]);
     
        

        if($request->hasfile('profile')){
            $name = time().'_'.$request->profile->getClientOriginalName();
            $filepath = $request->file('profile')->storeAs('profile',$name,'public');
            $photo = "/storage/".$filepath;
        }else{
            $photo = "profile/profile_1.png";
        }

        $journalvideo = new Journalvideo;
        $journalvideo->name = $request->name;
       
        $journalvideo->categories = $request->categories;
        $journalvideo->photo = $photo;
        $journalvideo->save();
        return redirect()->route('backendjournalvideo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request,journalvideo $journalvideo)
    {
         $journalvideo = Journalvideo::Find($id);
         
         $addjournalvideos = Addjournalvideo::all();

        return view('backend.journalvideo.journalcollection',compact('journalvideo','addjournalvideos'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id,Request $request,journalvideo $journalvideo)

    {
         $journalvideo = Journalvideo::Find($id);
        
        return view('backend.journalvideo.edit',compact('journalvideo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, journalvideo $journalvideo)
    {
         $journalvideo = Journalvideo::Find($id);

         $request->validate([
            'name'=>'required',
             'oldimage'=>'required'
           
            
        ]);

         if($request->hasfile('profile')){
            $name = time().'_'.$request->profile->getClientOriginalName();
            $filepath = $request->file('profile')->storeAs('profile',$name,'public');
            $photo = "/storage/".$filepath;
        }else{
             $photo = request('oldimage');
        }

            

        $journalvideo->name = $request->name;
        $journalvideo->categories = $request->categories;
        $journalvideo->photo = $photo;
      
        $journalvideo->save();

       
        return redirect()->route('backendjournalvideo.index')->with('msg','Successfully Update Journal Or Video');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request, journalvideo $journalvideo)
    {
        $journalvideo = Journalvideo::Find($id);
        $journalvideo->delete();
         return redirect()->route('backendjournalvideo.index')->with('msg','Successfully deleted Journal Or Video');
    }
}
