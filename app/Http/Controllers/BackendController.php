<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function dashboard(){

    	return view('backend.dashboard');
    }


     public function profile(){

    	return view('backend.profile');
    }




      public function total_n1(){

    	return view('backend.n1');
    }


     public function total_n2(){

    	return view('backend.n2');
    }


     public function total_n3(){

    	return view('backend.n3');
    }


     public function total_n4(){

    	return view('backend.n4');
    }


     public function total_n5(){

    	return view('backend.n5');
    }


         public function detail(){

    	return view('backend.detail');
    }





    public function new_student(){

    	return view('backend.newstudent');
    }


     public function old_student(){

    	return view('backend.oldstudent');
    }






     public function student_account_lists(){

    	return view('backend.accountlist');
    }






     public function class_timetables(){

    	return view('backend.onlineclass');
    }
     public function class_timetables_add(){

    	return view('backend.onlineclassadd');
    }





/*
     public function slider(){

    	return view('backend.slider');
    }
     
*/
    public function slider_add(){

        return view('backend.home.slideradd');
    }




     public function books(){

    	return view('backend.book');
    }
     public function books_add(){

    	return view('backend.bookadd');
    }





      public function about(){

    	return view('backend.about');
    }
     public function about_add(){

    	return view('backend.aboutadd');
    }



      public function gallery(){

    	return view('backend.gallery');
    }
     public function gallery_add(){

    	return view('backend.galleryadd');
    }


    public function video(){

    	return view('backend.video');
    }
     public function video_add(){

    	return view('backend.videoadd');
    }


    public function subject(){

    	return view('backend.subject');
    }
     public function subject_add(){

    	return view('backend.subjectadd');
    }
    public function review(){

    	return view('backend.review');
    }
     public function review_add(){

    	return view('backend.reviewadd');
    }




     public function contact(){

    	return view('backend.contact');
    }
     public function contact_add(){

    	return view('backend.contactadd');
    }




     public function journal_video(){

    	return view('backend.journal_video');
    }
       public function journal_collection(){

    	return view('backend.journalcollection');
    }
      public function journal_collection_add(){

    	return view('backend.journalcollectionadd');
    }
    public function video_collection(){

    	return view('backend.videocollection');
    }
      public function video_collection_add(){

    	return view('backend.videocollectionadd');
    }




       public function adminlogin(){

        return view('auth.login2');
    }
}
