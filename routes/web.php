<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/Admin_Profile','BackendController@profile')->name('profile');
Route::get('/Dashboard','BackendController@dashboard')->name('dashboard');
Route::get('/Total_Student_N1_Class','BackendController@total_n1')->name('total_n1_class');
Route::get('/Total_Student_N2_Class','BackendController@total_n2')->name('total_n2_class');
Route::get('/Total_Student_N3_Class','BackendController@total_n3')->name('total_n3_class');
Route::get('/Total_Student_N4_Class','BackendController@total_n4')->name('total_n4_class');
Route::get('/Total_Student_N5_Class','BackendController@total_n5')->name('total_n5_class');
Route::get('/Student_Detail','BackendController@detail')->name('detail');
Route::get('/New_Student','BackendController@new_student')->name('new_studnet');
Route::get('/Old_Student','BackendController@old_student')->name('old_studnet');
Route::get('/Student_Account_Lists','BackendController@student_account_lists')->name('studnet_account_lists');
Route::get('/Class_Timetables','BackendController@class_timetables')->name('class_timetables');
Route::get('/Class_Timetables_Add','BackendController@class_timetables_add')->name('class_timetables_add');
Route::get('/Slider','BackendController@slider')->name('slider');
Route::get('/Slider_Add','BackendController@slider_add')->name('slideradd');
Route::get('/Books','BackendController@books')->name('books');
Route::get('/Books_Add','BackendController@books_add')->name('booksadd');
Route::get('/AboutUs','BackendController@about')->name('about');
Route::get('/AboutUs_Add','BackendController@about_add')->name('aboutadd');
Route::get('/Class_Gallery','BackendController@gallery')->name('gallery');
Route::get('/Class_Gallery_Add','BackendController@gallery_add')->name('galleryadd');
Route::get('/Class_Video','BackendController@video')->name('video');
Route::get('/Class_Video_Add','BackendController@video_add')->name('videoadd');
Route::get('/Class_Subject','BackendController@subject')->name('subject');
Route::get('/Class_Subject_Add','BackendController@subject_add')->name('subjectadd');
Route::get('/Class_Review','BackendController@review')->name('review');
Route::get('/Class_Review_Add','BackendController@review_add')->name('reviewadd');
Route::get('/Contact','BackendController@contact')->name('contact');
Route::get('/Contact_Add','BackendController@contact_add')->name('contactadd');
Route::get('/Journal_Video','BackendController@journal_video')->name('journal_video');
Route::get('/Journal_Collection','BackendController@journal_collection')->name('journal_collection');
Route::get('/Journal_Collection_Add','BackendController@journal_collection_add')->name('journal_collection_add');
Route::get('/Video_Collection','BackendController@video_collection')->name('video_collection');
Route::get('/Video_Collection_Add','BackendController@video_collection_add')->name('video_collection_add');
