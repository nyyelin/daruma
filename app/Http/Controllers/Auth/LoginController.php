<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function authenticated($request, $user){
        if($user->hasRole('admin')){
            return redirect()->route('dashboard');

        }else if($user->hasRole('staff')){
            if(Auth::user()->staff){
                return redirect()->route('students.index');
            }else{
                Auth::logout();
                return redirect()->route('login')->with('msg','You are not our staff');
            }

        }else if($user->hasRole('student')){
            if(Auth::user()->student->timetables){
                foreach (Auth::user()->student->timetables as $value) {
                    if($value->pivot->status == 'Active' || $value->pivot->status == 'Finished'){
                        return redirect()->route('main');
                    }else{
                        Auth::logout();
                        return redirect()->route('login')->with('msg','You are not our student');
                    }
                }
            }else{
                Auth::logout();
                return redirect()->route('login')->with('msg','You are not our student');
            }
        }
    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
