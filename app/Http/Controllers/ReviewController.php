<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use Illuminate\Support\Facades\Hash;
use App\User;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $reviews = Review::all();
        return view('backend.review.backreview',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.review.reviewadd');
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

        $review = new Review;
        $review->name = $request->name;
        $review->photo = $photo;
        $review->class = $request->class;
        $review->subject = $request->subject;
  
        $review->save();
        return redirect()->route('backendreview.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review->delete();
        return redirect()->route('backendreview.backreview');
    }
}
