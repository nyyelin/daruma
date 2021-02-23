<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Illuminate\Support\Facades\Hash;
use App\User;

class BackendvideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('backend.video.backvideo',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.video.videoadd');
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
            'auth_name'  => ['required', 'string', 'max:255'],
            'header'  => ['required', 'string', 'max:255'],
            'dob'=>['required','date'],
            'subject'  => ['required','string']
           
        ]);
     
        

        if($request->hasfile('profile')){
            $name = time().'_'.$request->profile->getClientOriginalName();
            $filepath = $request->file('profile')->storeAs('profile',$name,'public');
            $photo = "/storage/".$filepath;
        }else{
            $photo = "profile/profile_1.png";
        }



        $video = new Video;
        $video->name = $request->name;
        $video->auth_name = $request->auth_name;
        $video->dob = $request->dob;
        $video->subject = $request->subject;
        $video->photo = $request->photo; 
        $video->save();
        
        return redirect()->route('backendvideo.index');
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
    public function edit($id,Request $request,Video $video)
    {
              $video = Video::Find($id);
           return view('backend.video.edit',compact('video'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Video $video)
    {
         $video = Video::Find($id);

         $request->validate([
            'name'=>'required',
            'auth_name'=> 'required',
            'header'=> 'required',
            'dob'=> 'required',
            'subject' => 'required'
        ]);

         if($request->hasfile('profile')){
            $name = time().'_'.$request->profile->getClientOriginalName();
            $filepath = $request->file('profile')->storeAs('profile',$name,'public');
            $photo = "/storage/".$filepath;
        }else{
            $photo = request('oldimage');
        }


        $video->name = $request->name;
        $video->auth_name = $request->auth_name;
        $video->header = $request->header;
        $video->dob = $request->dob; 
        $video->subject = $request->subject;
        $video->photo = $photo; 
        $video->save();

       
        return redirect()->route('backendvideo.index')->with('msg','Successfully Update Video');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request,Video $video)
    {
         $video = Video::Find($id);
         $video->delete();
        return redirect()->route('backendvideo.index')->with('msg','Successfully deleted Video');
    }
}
