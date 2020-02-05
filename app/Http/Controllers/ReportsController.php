<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Report;
use Auth;
use App\User;
use App\Company;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{

    // ********Access control for Reports********
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {

      $reports = Report::all();
      return view('reports.all')->with('reports', $reports);
      // return view('reports.all');
    }

    public function create() {
      $usersmail = User::all();


      return view('reports.new_report')->with('usersmail', $usersmail);
    }

    public function store(Request $request)
    {

// To get the user id of who is sending a report
      $loguser = Auth::user();

// To get the company's id of the sender
      $compa = Company::all();
      $comp = $compa[0];

      $this->validate($request, [
        'report_title' => 'required',
        'content' => 'required',
        'receiver' => 'required',
      ]);

    //Create Report
    $report = new Report;
    $report->report_title =$request->input('report_title');
    $report->receiver =$request->input('receiver');
    $report->content =$request->input('content');
    $report->user_id =$loguser->id;
    $report->company_id =$comp->id;
    $report->save();


    return redirect('/reports')->with('success', 'Report Successful Created');
    }


    public function show($id)
    {

      $reports = Report::all();
      // dd($reports);
      return view('reports.show')->with('reports', $reports);
    }



    public function received() {
      $receiverid = Auth::user()->email;

      $reports = Report::where('receiver', '$receiverid')->get();
      // $reports = DB::table('reports')->where('receiver', '$receiverid')->get();
      return view('reports.received')->with('reports', $reports);
    }

    public function scheduled() {
      return view('reports.scheduled');
    }

    public function sent() {
      $senderid = Auth::user()->id;

      $reports = Report::where('user_id', $senderid)->get();
      // $reports = DB::table('reports')->where('user_id', $senderid)->get();
      return view('reports.sent')->with('reports', $reports);

    }

    public function real() {
      return view('reports.reports1');
    }

    public function sample() {
      return view('reports.sample');
    }


}
