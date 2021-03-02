<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Book;
use App\About;
use App\Gallery;
use App\Video;
use App\Subject;
use App\Review;
use App\Contact;
use App\Addjournalvideo;
use App\Journalvideo;
use App\Timetable;
use App\Level;
use App\Day;
use Carbon;
use App\Student;
use Auth;
use Illuminate\Support\Facades\Hash;


class FrontendController extends Controller
{
    public function home()
    {
       $sliders = Slider::orderBy('id','DESC')->limit(3)->get();
       $books = Book::all();
       $journalvideos = Journalvideo::all();
       $timetables = Timetable::where('start_date','>=',Carbon\Carbon::today())->get();
    	return view('frontend.index',compact('sliders','books','journalvideos','timetables'));
    }

      public function about(){

       $abouts = About::all();
    	 return view('frontend.about',compact('abouts'));

    }
      public function photo(){

     /* $levels = Level::orderBy('categories')*/
      $gallerys = Gallery::all();
    	return view('frontend.gallery',compact('gallerys'));
    }
     public function class(){
      $timetables = Timetable::where('start_date','>=',Carbon\Carbon::today())->get();
    	return view('frontend.class',compact('timetables'));
    }
    public function video(){
   
    }
     public function review(){
        $reviews = Review::all();
       $subjects = Subject::all();
    	return view('frontend.review',compact('reviews','subjects'));
    }
     public function contact(){

     $contacts = Contact::all();
    	return view('frontend.contact',compact('contacts'));
    }
    public function regular_class(){
      $timetables = Timetable::where('start_date','>=',Carbon\Carbon::today())->get();
    	return view('frontend.regularclass',compact('timetables'));
    }
    public function online_class(){
      $timetables = Timetable::where('start_date','>=',Carbon\Carbon::today())->get();
    	return view('frontend.onlineclass',compact('timetables'));
    }
     public function latestnew($id){

        $books = Book::Find($id);
    	return view('frontend.latestnew',compact('books'));
    }

     public function books($id,Request $request){

      $journalvideo = Journalvideo::Find($id);
      $addjournalvideos = Addjournalvideo::orderBy('id','DESC')->get();
      $addjournalvideos = Addjournalvideo::where('detail_id',$id)->get(); 

    	return view('frontend.books',compact('addjournalvideos','journalvideo'));
    }

    public function detailbooks($id,Request $request,Addjournalvideo $addjournalvideo){

      $addjournalvideo = Addjournalvideo::Find($id);


      return view('frontend.detailbooks',compact('addjournalvideo'));
    }

     public function japanmyanmarday(){

    	return view('frontend.japanmyanmarday');
    }
    public function generaljournal(){

    	return view('frontend.generaljournal');
    }
     public function knowledgevideo(){

    	return view('frontend.knowledgevideo');
    }
     public function readingstory(){

    	return view('frontend.readingstory');
    }
    public function information(){

      $student = Student::where('user_id',Auth::id())->first();
    	return view('frontend.information',compact('student'));
    }
    public function contacttest(){

      return view('frontend.contacttest');
    }

     public function testingpage(){

        $videos = Video::all();
      return view('frontend.testing',compact('videos'));
    }

    public function update_information(Request $request)
    {
      $validator = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'phone'  => ['required'],
            'address'  => ['required','string'],
            'dob'=>['required','date'],
            'password'  => ['confirmed'],
        ]);

        $student = Student::where('user_id',Auth::id())->first();
        
       
        $student->user->name = $request->name;
        $student->user->email = $request->email;
        $student->user->password = Hash::make($request->password);
        $student->user->phone = $request->phone;
        $student->user->save();
        

        if($request->hasfile('new_photo')){
            $name = time().'_'.$request->new_photo->getClientOriginalName();
            $filepath = $request->file('new_photo')->storeAs('profile',$name,'public');
            $photo = "/storage/".$filepath;
        }else{
            $photo = $request->old_photo;
        }

        $student->user_id = $student->user->id;
        $student->address = $request->address;
        $student->dob = $request->dob;
        $student->photo = $photo;
        $student->profile_link = $request->fb_name;

        $student->save();
        return redirect()->back()->with('msg','Successfully update');
    }
    

}
