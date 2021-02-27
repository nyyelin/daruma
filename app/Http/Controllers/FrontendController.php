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
      $videos = Video::all();
    	return view('frontend.video',compact('videos'));
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
     public function books(){
      $addjournalvideos = Addjournalvideo::all();
    	return view('frontend.books',compact('addjournalvideos'));
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

    	return view('frontend.information');
    }
    public function contacttest(){

      return view('frontend.contacttest');
    }
}
