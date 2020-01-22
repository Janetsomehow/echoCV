<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//Google Sheets
use Revolution\Google\Sheets\Facades\Sheets;
// These for charts
use App\Charts\UserLineChart;
use App\Graph;
//These for excel import/export
use App\Exports\ExportGraph;
use App\Imports\ImportGraph;
use Maatwebsite\Excel\Facades\Excel;

class MetricsController extends Controller
{

      /**
      * Handle the incoming request.
      *
      * @param  \Illuminate\Http\Request  $request
      *
      * @return \Illuminate\Http\Response
      */
     public function __invoke(Request $request)
     {

         $sheets = Sheets::spreadsheet(config('sheets.post_spreadsheet_id'))
                        ->sheetById(config('sheets.post_sheet_id'))
                        ->all();

        $posts = array();
        foreach ($sheets AS $data) {
            $posts[] = array(
                'name' => $data[0],
                'message' => $data[1],
                'created_at' => $data[2],
            );
        }
         return view('metrics.google_test')->with(compact('posts'));
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function build($chartType)
    {
      $graphs = Graph::all();
      // dd($graphs);

      if(count($graphs) > 0){
        foreach($graphs as $graph){
          $chart = new UserLineChart;
          $borderColors = [
              "rgba(25, 99, 132, 1.0)",
              "rgba(22, 160, 133, 1.0)",
              "rgba(55, 205, 86, 1.0)",
              "rgba(51, 105, 232, 1.0)",
              "rgba(244, 67, 54, 1.0)",
              "rgba(34, 198, 246, 1.0)",
              "rgba(153, 102, 255, 1.0)",
              "rgba(255, 159, 64, 1.0)",
              "rgba(102, 30, 99, 1.0)",
              "rgba(255, 159, 64, 1.0)",
              "rgba(133, 30, 99, 1.0)",
              "rgba(205, 220, 57, 1.0)"
          ];
          $fillColors = [
              "rgba(255, 99, 132, 0.2)",
              "rgba(22, 160, 133, 0.2)",
              "rgba(255, 205, 86, 0.2)",
              "rgba(51, 105, 232, 0.2)",
              "rgba(244, 67, 54, 0.2)",
              "rgba(34, 198, 246, 0.2)",
              "rgba(153, 102, 255, 0.2)",
              "rgba(255, 159, 64, 0.2)",
              "rgba(233, 30, 99, 0.2)",
              "rgba(255, 159, 64, 0.2)",
              "rgba(233, 30, 99, 0.2)",
              "rgba(205, 220, 57, 0.2)"
          ];
          switch ($chartType)
          {

            case 'bar':
              $chart->title($graph->name, 30, "rgb(255, 99, 132)", true, 'Nunito');
              $chart->labels([$graph->aaa, $graph->bbb, $graph->ccc, $graph->ddd, $graph->eee, $graph->fff,
              $graph->ggg, $graph->hhh, $graph->iii, $graph->jjj, $graph->kkk, $graph->lll]);
              $chart->dataset('EchoVC Mertics', 'bar',  [$graph->aaa1, $graph->bbb1, $graph->ccc1, $graph->ddd1,
              $graph->eee1, $graph->fff1, $graph->ggg1, $graph->hhh1, $graph->iii1, $graph->jjj1, $graph->kkk1, $graph->lll1])
              ->color($borderColors)
              ->backgroundcolor($fillColors);
              break;
            case 'pie':
              $chart->minimalist(true);  //This shows the graph line
              $chart->displaylegend(true);
              $chart->title($graph->name, 30, "rgb(255, 99, 132)", true, 'Nunito');
              $chart->labels([$graph->aaa, $graph->bbb, $graph->ccc, $graph->ddd, $graph->eee, $graph->fff,
              $graph->ggg, $graph->hhh, $graph->iii, $graph->jjj, $graph->kkk, $graph->lll]);
              $chart->dataset('EchoVC Mertics', 'pie',  [$graph->aaa1, $graph->bbb1, $graph->ccc1, $graph->ddd1,
              $graph->eee1, $graph->fff1, $graph->ggg1, $graph->hhh1, $graph->iii1, $graph->jjj1, $graph->kkk1, $graph->lll1])
              ->color($borderColors)
              ->backgroundcolor($fillColors);
              break;
            case 'donut':
              $chart->minimalist(true);  //This shows the graph line
              $chart->displaylegend(true);
              $chart->title($graph->name, 30, "rgb(255, 99, 132)", true, 'Nunito');
              $chart->labels([$graph->aaa, $graph->bbb, $graph->ccc, $graph->ddd, $graph->eee, $graph->fff,
              $graph->ggg, $graph->hhh, $graph->iii, $graph->jjj, $graph->kkk, $graph->lll]);
              $chart->dataset('EchoVC Mertics', 'doughnut',  [$graph->aaa1, $graph->bbb1, $graph->ccc1, $graph->ddd1,
              $graph->eee1, $graph->fff1, $graph->ggg1, $graph->hhh1, $graph->iii1, $graph->jjj1, $graph->kkk1, $graph->lll1])
              ->color($borderColors)
              ->backgroundcolor($fillColors);
              break;
            case 'line':
              $chart->title($graph->name, 30, "rgb(255, 99, 132)", true, 'Nunito');
              $chart->labels([$graph->aaa, $graph->bbb, $graph->ccc, $graph->ddd, $graph->eee, $graph->fff,
              $graph->ggg, $graph->hhh, $graph->iii, $graph->jjj, $graph->kkk, $graph->lll]);
              $chart->dataset('EchoVC Mertics', 'line',  [$graph->aaa1, $graph->bbb1, $graph->ccc1, $graph->ddd1,
              $graph->eee1, $graph->fff1, $graph->ggg1, $graph->hhh1, $graph->iii1, $graph->jjj1, $graph->kkk1, $graph->lll1])
              ->color("rgb(255, 99, 132)")
              ->backgroundcolor("rgb(255, 199, 231)")
              ->fill(true)
              ->linetension(0.5)
              ->dashed([10]);
              break;
            case 'area':
              $chart->title($graph->name, 30, "rgb(255, 99, 132)", true, 'Nunito');
              $chart->labels([$graph->aaa, $graph->bbb, $graph->ccc, $graph->ddd, $graph->eee, $graph->fff,
              $graph->ggg, $graph->hhh, $graph->iii, $graph->jjj, $graph->kkk, $graph->lll]);
              $chart->dataset('EchoVC Mertics', 'area',  [$graph->aaa1, $graph->bbb1, $graph->ccc1, $graph->ddd1,
              $graph->eee1, $graph->fff1, $graph->ggg1, $graph->hhh1, $graph->iii1, $graph->jjj1, $graph->kkk1, $graph->lll1])
              ->color($borderColors)
              ->backgroundcolor($fillColors);
              break;
            case 'dot':
              $chart->title($graph->name, 30, "rgb(255, 99, 132)", true, 'Nunito');
              $chart->barwidth(0.0);
              $chart->displaylegend(false);
              $chart->labels([$graph->aaa, $graph->bbb, $graph->ccc, $graph->ddd, $graph->eee, $graph->fff,
              $graph->ggg, $graph->hhh, $graph->iii, $graph->jjj, $graph->kkk, $graph->lll]);
              $chart->dataset('EchoVC Mertics', 'line',  [$graph->aaa1, $graph->bbb1, $graph->ccc1, $graph->ddd1,
              $graph->eee1, $graph->fff1, $graph->ggg1, $graph->hhh1, $graph->iii1, $graph->jjj1, $graph->kkk1, $graph->lll1])
              ->color($borderColors)
              ->backgroundcolor($fillColors)
                  ->fill(false)
                  ->linetension(0)
                  ->dashed([10]);
              break;
            case 'geo':
              $chart->title($graph->name, 30, "rgb(255, 99, 132)", true, 'Nunito');
              $chart->labels([$graph->aaa, $graph->bbb, $graph->ccc, $graph->ddd, $graph->eee, $graph->fff,
              $graph->ggg, $graph->hhh, $graph->iii, $graph->jjj, $graph->kkk, $graph->lll]);
              $chart->dataset('EchoVC Mertics', 'line',  [$graph->aaa1, $graph->bbb1, $graph->ccc1, $graph->ddd1,
              $graph->eee1, $graph->fff1, $graph->ggg1, $graph->hhh1, $graph->iii1, $graph->jjj1, $graph->kkk1, $graph->lll1])
              ->color($borderColors)
              ->backgroundcolor($fillColors);
              break;
            default:
            // code...
            break;
          }
        }
      }
      
    // return view('metrics.show')->with('chart', $chart, 'graph', $graph);
    return view('metrics.show')->with(compact('chart', 'graphs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        'name' => 'required',
        'desc' => 'required'
      ]);


    //Create Metrics
    $graph = new Graph;
    $graph->name =$request->input('name');
    $graph->desc =$request->input('desc');
    $graph->aaa =$request->input('aaa');
    $graph->aaa1 =$request->input('aaa1');
    $graph->bbb =$request->input('bbb');
    $graph->bbb1 =$request->input('bbb1');
    $graph->ccc =$request->input('ccc');
    $graph->ccc1 =$request->input('ccc1');
    $graph->ddd =$request->input('ddd');
    $graph->ddd1 =$request->input('ddd1');
    $graph->eee =$request->input('eee');
    $graph->eee1 =$request->input('eee1');
    $graph->fff =$request->input('fff');
    $graph->fff1 =$request->input('fff1');
    $graph->ggg =$request->input('ggg');
    $graph->ggg1 =$request->input('ggg1');
    $graph->hhh =$request->input('hhh');
    $graph->hhh1 =$request->input('hhh1');
    $graph->iii =$request->input('iii');
    $graph->iii1 =$request->input('iii1');
    $graph->jjj =$request->input('jjj');
    $graph->jjj1 =$request->input('jjj1');
    $graph->kkk =$request->input('kkk');
    $graph->kkk1 =$request->input('kkk1');
    $graph->lll =$request->input('lll');
    $graph->lll1 =$request->input('lll1');
    $graph->percent =$request->input('percent');
    $graph->numb =$request->input('numb');
    $graph->save();

    return redirect('/metrics/show/bar')->with('success', 'Metrics Successful Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $graphs = Graph::all();
      dd($graphs);
      return view('metrics.show')->with('graphs', $graphs);
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

    public function index()
    {
        $graphs = Graph::all();
        return view('metrics.create')->with('graphs', $graphs);
    }


    /**
   * @return \Illuminate\Support\Collection
   */
   public function importExport()
   {
      $graphs = Graph::all();
      return view('import')->with('graphs', $graphs);
   }

   /**
   * @return \Illuminate\Support\Collection
   */
   public function export()
   {
       return Excel::download(new ExportGraph, 'metrics.xlsx');
   }

   /**
   * @return \Illuminate\Support\Collection
   */
   public function import()
   {

       Excel::import(new ImportGraph, request()->file('file'));
       return redirect('/metrics/show/bar')->with('success', 'Excel Sheet Successful Uploaded');
   }
}
