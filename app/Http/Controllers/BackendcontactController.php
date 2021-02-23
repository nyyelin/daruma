<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Hash;
use App\User;



class BackendcontactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('backend.contact.backcontact',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.contact.contactadd');
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
         
             'email'  => ['required','string','email','max:255','unique:users'],
             'phone'  => ['required'],
             'address'  => ['required','string'],
             'map'  => ['required','string'],
           
        ]);
     
        

      

        $contact = new Contact;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->map = $request->map;
  
        $contact->save();
        return redirect()->route('backendcontact.index');
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
    public function edit($id,Request $request,Contact $contact)
    {
           $contact = Contact::Find($id);
           return view('backend.contact.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Contact $contact)
    {
         $contact = Contact::Find($id);

         $request->validate([
            'email'=>'required',
            'phone'=>'required',
            'map'=>'required',
            'address' => 'required'
        ]);

        

        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->map = $request->map;
        $contact->address = $request->address;
      
        $contact->save();

       
        return redirect()->route('backendcontact.index')->with('msg','Successfully Update Contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request,Contact $contact)
    {
        $contact = Contact::Find($id);
        $contact->delete();
        return redirect()->route('backendcontact.index')->with('msg','Successfully deleted Contact');
    }
}
