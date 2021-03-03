<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/',function(){
	return view('welcome');
<<<<<<< HEAD
});
=======
});*/
Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Admin/login', 'BackendController@adminlogin')->name('adminlogin');

Route::middleware('auth')->group(function () {

// backend
Route::get('/Admin_Profile','BackendController@profile')->name('profile');
Route::get('/Dashboard','BackendController@dashboard')->name('dashboard');
Route::post('admin_change_password','BackendController@admin_change_password')->name('admin_change_password');
Route::get('/getstudents','BackendController@getstudents')->name('getstudents');


// Route::get('/Student_Detail','BackendController@detail')->name('detail');


Route::resource('students','StudentController');
Route::post('/gettimetablebylevel','StudentController@gettimetablebylevel')->name('gettimetablebylevel');
Route::post('/getdatabytimetable','StudentController@getdatabytimetable')->name('getdatabytimetable');

Route::post('/deletestudenttimetable','StudentController@deletestudenttimetable')->name('deletestudenttimetable');

Route::get('/student/oldstudent/','StudentController@old_student')->name('student.oldstudent');

Route::post('/student/oldstudentstore/','StudentController@oldstudentstore')->name('student.oldstudentstore');


Route::post('/getstudentbycodeno','StudentController@getstudentbycodeno')->name('getstudentbycodeno');

Route::post('/getstudentlist','StudentController@getstudentlist')->name('getstudentlist');

Route::post('/getstudentinstallment','StudentController@getstudentinstallment')->name('getstudentinstallment');


Route::get('/Student_Account_Lists','BackendController@student_account_lists')->name('studnet_account_lists');





Route::get('/Class_Timetables','BackendController@class_timetables')->name('class_timetables');
// Route::get('/Class_Timetables_Add','BackendController@class_timetables_add')->name('class_timetables_add');
Route::resource('timetables','TimetableController');
Route::post('timetables/getdata','TimetableController@getdata')->name('timetables.getdata');

Route::get('/Contact_Add','BackendController@contact_add')->name('contactadd');
/*Route::get('/Journal_Video','BackendController@journal_video')->name('journal_video');*/
Route::get('/Journal_Collection','BackendController@journal_collection')->name('journal_collection');
Route::get('/Journal_Collection_Add','BackendController@journal_collection_add')->name('journal_collection_add');
Route::get('/Video_Collection','BackendController@video_collection')->name('video_collection');
Route::get('/Video_Collection_Add','BackendController@video_collection_add')->name('video_collection_add');


// staff
Route::resource('staffs','StaffController');
Route::post('staff_update','StaffController@staff_update')->name('staff_update');

//slider
Route::resource('slider','SliderController');
//Book
Route::resource('book','BookController');
//About
Route::resource('backendabout','AboutController');
//Gallery
Route::resource('backendgallery','GalleryController');
//Subject
Route::resource('backendsubject','SubjectController');
//Review
Route::resource('backendreview','ReviewController');
//Contact
Route::resource('backendcontact','BackendcontactController');
//Video
Route::resource('backendvideo','BackendvideoController');
//Journal_Video
Route::resource('backendjournalvideo','BackendjournalvideoController');
Route::post('/editstore','BackendjournalvideoController@editstore')->name('editstore');
//Add Journal_Video
Route::resource('backendaddjournalvideo','BackendaddjournalvideoController');

});
// dynamic
/*Route::get('/Slider','BackendController@slider')->name('slider');*/
/*Route::get('/Slider_Add','BackendController@slider_add')->name('slideradd');*/
/*Route::get('/Books','BackendController@books')->name('books');
Route::get('/Books_Add','BackendController@books_add')->name('booksadd');*/
/*Route::get('/AboutUs','BackendController@about')->name('about');
Route::get('/AboutUs_Add','BackendController@about_add')->name('aboutadd');*/
/*Route::get('/Class_Gallery','BackendController@gallery')->name('gallery');
Route::get('/Class_Gallery_Add','BackendController@gallery_add')->name('galleryadd');*/
/*Route::get('/Class_Video','BackendController@video')->name('video');
Route::get('/Class_Video_Add','BackendController@video_add')->name('videoadd');*/

/*
Route::get('/Class_Subject','BackendController@subject')->name('subject');
Route::get('/Class_Subject_Add','BackendController@subject_add')->name('subjectadd');*/
/*Route::get('/Class_Review','BackendController@review')->name('review');
Route::get('/Class_Review_Add','BackendController@review_add')->name('reviewadd');*/
/*Route::get('/Contact','BackendController@contact')->name('contact');*/




// frontend
Route::get('/', 'FrontendController@home')->name('main');
Route::get('/About_Us', 'FrontendController@about')->name('about');
Route::get('/Gallery_Class', 'FrontendController@photo')->name('gallery');
Route::get('/Our_Class', 'FrontendController@class')->name('class');
Route::get('/Our_Video', 'FrontendController@testingpage')->name('testingpage');
Route::get('/Review', 'FrontendController@review')->name('review');
Route::get('/Our_Contact', 'FrontendController@contact')->name('contact');
/*Route::post('/Our_Contact','FrontendController@sendEmail')->name('contact.submit');*/

Route::get('/Regular_Class', 'FrontendController@regular_class')->name('regularclass');
Route::get('/Online_Class', 'FrontendController@online_class')->name('onlineclass');
Route::get('/Latest_New/{id}', 'FrontendController@latestnew')->name('latestnew');
Route::get('/Journal&Videos/{id}', 'FrontendController@books')->name('books');
Route::get('/DetailJournal&Videos/{id}', 'FrontendController@detailbooks')->name('detailbooks');
Route::get('/Japan-Myanmar_Day', 'FrontendController@japanmyanmarday')->name('japanmyanmarday');
Route::get('/General_Journal', 'FrontendController@generaljournal')->name('generaljournal');
Route::get('/Knowledge_Video', 'FrontendController@knowledgevideo')->name('knowledgevideo');
Route::get('/Reading_Story', 'FrontendController@readingstory')->name('readingstory');
Route::get('/Student_Information', 'FrontendController@stuinformation')->name('stuinformation');
/*Route::post('/Send-Message','ContactController@sendEmail')->name('contact.send');*/
Route::get('/Our_Contact_Test', 'FrontendController@contacttest')->name('contacttest');
/*
Route::get('/Our_Testing_Page', 'FrontendController@testingpage')->name('testingpage');*/

Route::post('/Our_Contact',function(){
	$data = request(['name','email','subject','message']);

	\Illuminate\Support\Facades\Mail::to('nyiyl345@gmail.com')
	->send(new \App\Mail\ContactMe($data));

	return redirect('/Our_Contact')
	->with('flash','Message Send Succesully');
});