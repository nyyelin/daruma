<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Illuminate\Support\Facades\Hash;
use App\User;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $gallerys = Gallery::all();
        return view('backend.photo.gallery',compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.photo.galleryadd');
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

        $gallery = new Gallery;
        $gallery->name = $request->name;
        $gallery->class = $request->class;
        $gallery->categories = $request->categories;
        $gallery->photo = $photo;
        $gallery->save();
        
        return redirect()->route('backendgallery.index');
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
    public function edit($id,Request $request, Gallery $gallery)
    {


        $gallery = Gallery::Find($id);
         return view('backend.photo.edit',compact('gallery'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Gallery $gallery)
    {
        $gallery = Gallery::Find($id);

        $request->validate([
            'name'=>'required'
    
            
        ]);

         if($request->hasfile('profile')){
            $name = time().'_'.$request->profile->getClientOriginalName();
            $filepath = $request->file('profile')->storeAs('profile',$name,'public');
            $photo = "/storage/".$filepath;
        }else{
             $photo = request('oldimage');
        }

   
        $gallery->name = $request->name;
        $gallery->class = $request->class;
        $gallery->categories = $request->categories;
        $gallery->photo = $photo;
      
        $gallery->save();

       
        return redirect()->route('backendgallery.index')->with('msg','Successfully Update Gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request,Gallery $gallery)

    {
         $gallery = Gallery::Find($id);
         $gallery->delete();
        return redirect()->route('backendgallery.index')->with('msg','Successfully deleted Gallery');
    }
}
