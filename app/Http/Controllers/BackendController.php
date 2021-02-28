<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Student;
use App\Timetable;
use Carbon;
use App\Payment;
use Response;
use App\Staff;

class BackendController extends Controller
{
    public function dashboard(){

      $students = Student::all();
      $timetables = Timetable::all();
      $payments = Payment::all();
      $staffs = Staff::all();
    	return view('backend.dashboard',compact('students','timetables','payments','staffs'));
    }


     public function profile(){

    	return view('backend.profile');
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


    public function admin_change_password(Request $request)
    {
        $request->validate([
                'password' => 'required|min:8|confirmed',
        ]);

        $user = User::find(Auth::id());
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back();
    }

    public function getstudents($value='')
    {
      $data = Student::selectRaw('COUNT(*) as count, YEAR(created_at) year, MONTH(created_at) month')
              ->groupBy('year', 'month')
              ->get();

      $month = [];
      foreach ($data as $row) {
        if($row->year == Carbon\Carbon::now()->year){
          $month[$row->month] = $row->count;
        }
      }

      $students = [];
      for ($i=0; $i < 12; $i++) { 
        if(array_key_exists($i+1, $month)){
          array_push($students, $month[$i+1]);
        }else{
          array_push($students, 0);
        }
      }

      $payments = Payment::whereMonth('created_at',Carbon\Carbon::now()->month)->get();
      
      
      return Response::json(array(
          'students' => $students,
        ));
    }
}
