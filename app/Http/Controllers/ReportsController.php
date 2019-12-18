<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Report;

class ReportsController extends Controller
{

    public function index() {
      return view('reports.all');
    }

    public function create() {
      return view('reports.new_report');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'report_title' => 'required',
        'content' => 'required',
      ]);


    //Create Report
    $report = new Report;
    $report->report_title =$request->input('report_title');
    $report->content =$request->input('content');
    $report->save();

    return redirect('/reports')->with('success', 'Report Successful Created');
    }

    public function received() {
      return view('reports.received');
    }

    public function scheduled() {
      return view('reports.scheduled');
    }

    public function sent() {
      return view('reports.sent');
    }

}
