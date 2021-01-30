<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){

    	return view('frontend.index');
    }

      public function about(){

    	return view('frontend.about');
    }
      public function photo(){

    	return view('frontend.gallery');
    }
     public function class(){

    	return view('frontend.class');
    }
    public function video(){

    	return view('frontend.video');
    }
     public function review(){

    	return view('frontend.review');
    }
     public function contact(){

    	return view('frontend.contact');
    }
    public function regular_class(){

    	return view('frontend.regularclass');
    }
    public function online_class(){

    	return view('frontend.onlineclass');
    }
     public function latestnew(){

    	return view('frontend.latestnew');
    }
     public function books(){

    	return view('frontend.books');
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
}
