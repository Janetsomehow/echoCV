<?php

namespace App\Http\Controllers;
use App\Company;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Session;

class companycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $company = company::all();

       return view('add_company.index', compact('companies'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'c_name'=>'required',
           'website'=>'required',
           'country'=>'required',
           'pcontact'=>'required',
           'status'=>'required',
           'stage'=>'required',
           'lead'=>'required',
           'analyst'=>'required',

       ]);



       $company = Company::create ([
        'c_name'=>$request->get('c_name'),
        'website'=>$request->get('website'),
        'country'=>$request->get('country'),
        'pcontact'=>$request->get('pcontact'),
        'status'=>$request->get('status'),
        'stage'=>$request->get('stage'),
        'lead'=>$request->get('lead'),
        'analyst'=>$request->get('analyst'),   
       // $contact->fname =$request->input('fname');
 
       ]);

       return redirect ('/add_chart')->with('success','Company details saved!');
       return $request->all();
        //
        /*   $company = new company;
        $company -> name = request ('name')
        $company -> website = request ('website')
        $company -> country = request ('country')
        $company -> status = request ('status')
        $company -> stage = request ('stage')
        $company -> lead = request ('lead')
        $company -> analyst = request ('analyst')

              $company->save();
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
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
        //
    }
}
