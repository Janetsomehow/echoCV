<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);

        $contacts = Contact::orderBy('created_at', 'desc');
        return view('contact.index')->with('contacts', $contacts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('contact.contacts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required',
        'phoneNo' => 'required',
        'company' => 'required',
        'title' => 'required',
        'tags' => 'required'
      ]);


    //Create Contact
    $contact = new Contact;
    $contact->fname =$request->input('fname');
    $contact->lname =$request->input('lname');
    $contact->email =$request->input('email');
    $contact->phoneNo =$request->input('phoneNo');
    $contact->company =$request->input('company');
    $contact->title =$request->input('title');
    $contact->tags =$request->input('tags');
    // $contact->user_id = auth()->user()->id;
    $contact->save();

    return redirect('/contact/contacts')->with('success', 'Contact Successful Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // $contact = Contact::find($id);

      $contacts = Contact::all();
      // $contacts = Contact::orderBy('created_at', 'desc');
      return view('contact.contacts')->with('contacts', $contacts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $contact = Contact::find($id);

      $contact->delete();
      return redirect('/contact/contacts')->with('success', 'Contact Removed');
    }
}
