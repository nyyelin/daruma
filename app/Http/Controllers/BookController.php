<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\Hash;
use App\User;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('backend.book.ebook',compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.book.bookadd');
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
            'fee'   => ['required'],
             'header'  => ['required', 'string', 'max:255'],
              'auth_name'  => ['required', 'string', 'max:255'],
            'dob'=>['required','date'],
            'subject'  => ['required','string'],
           
        ]);
     
        

        if($request->hasfile('profile')){
            $name = time().'_'.$request->profile->getClientOriginalName();
            $filepath = $request->file('profile')->storeAs('profile',$name,'public');
            $photo = "/storage/".$filepath;
        }else{
            $photo = "profile/profile_1.png";
        }

          if($request->hasfile('profile2')){
            $name2 = time().'_'.$request->profile2->getClientOriginalName();
            $filepath2 = $request->file('profile2')->storeAs('profile2',$name2,'public');
            $photo2 = "/storage/".$filepath2;
        }else{
            $photo2 = "profile/profile_1.png";
        }

        $book = new Book;
        $book->name = $request->name;
        $book->fee = $request->fee;
        $book->photo = $photo;
        $book->photo2 = $photo2;
        $book->header = $request->header;
        $book->auth_name = $request->auth_name;
        $book->dob = $request->dob;
        $book->subject = $request->subject;
      
        $book->save();
        return redirect()->route('book.index');


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
    public function edit(Book $book)
    {
          $books = Book::all();
    
         return view('backend.book.edit',compact('books','book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
         $request->validate([
            'name'=>'required',
            'fee'   => 'required',
            'header'  => 'required',
            'auth_name'  => 'required',
            'dob'=>'required',
            'subject' => 'required'
        ]);

          if($request->hasfile('profile')){
            $name = time().'_'.$request->profile->getClientOriginalName();
            $filepath = $request->file('profile')->storeAs('profile',$name,'public');
            $photo = "/storage/".$filepath;
        }else{
            $photo = request('oldimage');
        }

          if($request->hasfile('profile2')){
            $name2 = time().'_'.$request->profile2->getClientOriginalName();
            $filepath2 = $request->file('profile2')->storeAs('profile2',$name2,'public');
            $photo2 = "/storage/".$filepath2;
        }else{
            $photo2 = request('oldimage2');
        }

     
        $book->name = $request->name;
        $book->fee = $request->fee;
        $book->header = $request->header;
        $book->auth_name = $request->auth_name;
        $book->dob = $request->dob;
        $book->subject = $request->subject;
        $book->photo = $photo;
      
        $book->photo2 = $photo2;
        $book->save();

       

        return redirect()->route('book.index')->with('msg','Successfully Update Ebook');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
         $book->delete();
        return redirect()->route('book.index')->with('msg','Successfully deleted Ebook');
    }
}

