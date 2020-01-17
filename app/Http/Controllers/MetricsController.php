<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Charts\UserLineChart;

class MetricsController extends Controller
{

        public function index($type)
          {
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
            switch ($type)
            {
              case 'bar':
                $chart->labels(['Jan', 'Feb', 'Mar', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']);
                $chart->dataset('EchoVC Mertics', 'bar',  [93, 25, 61, 70, 45, 83, 73, 45, 81, 50, 65, 18])
                ->color($borderColors)
                ->backgroundcolor($fillColors);
                break;
              case 'pie':
                // $chart->minimalist(true);  //This shows the graph line
                $chart->labels(['Jan', 'Feb', 'Mar', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']);
                $chart->dataset('EchoVC Mertics', 'pie',  [93, 25, 61, 70, 45, 83, 73, 45, 81, 50, 65, 18])
                ->color($borderColors)
                ->backgroundcolor($fillColors);
                break;
              case 'donut':
                $chart->labels(['Jan', 'Feb', 'Mar', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']);
                $chart->dataset('EchoVC Mertics', 'doughnut',  [93, 25, 61, 70, 45, 83, 73, 45, 81, 50, 65, 18])
                ->color($borderColors)
                ->backgroundcolor($fillColors);
                break;
              case 'line':
                $chart->labels(['Jan', 'Feb', 'Mar', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']);
                $chart->dataset('EchoVC Mertics', 'line',  [93, 25, 61, 70, 45, 83, 73, 45, 81, 50, 65, 18])
                ->color("rgb(255, 99, 132)")
                ->backgroundcolor("rgb(255, 199, 231)")
                ->fill(true)
                ->linetension(0.5)
                ->dashed([10]);
                break;
              case 'area':
                $chart->labels(['Jan', 'Feb', 'Mar', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']);
                $chart->dataset('EchoVC Mertics', 'area', [93, 25, 61, 70, 45, 83, 73, 45, 81, 50, 65, 18])
                ->color($borderColors)
                ->backgroundcolor($fillColors);
                break;
              case 'dot':
                $chart->title('Users by Months', 30, "rgb(255, 99, 132)", true, 'Helvetica Neue');
                $chart->barwidth(0.0);
                $chart->displaylegend(false);
                $chart->labels(['Jan', 'Feb', 'Mar', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']);
                $chart->dataset('EchoVC Mertics', 'line', [93, 25, 61, 70, 45, 83, 73, 45, 81, 50, 65, 18])
                ->color($borderColors)
                ->backgroundcolor($fillColors)
                    ->fill(false)
                    ->linetension(0)
                    ->dashed([10]);
                break;
              case 'geo':
                $chart->labels(['Jan', 'Feb', 'Mar', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']);
                $chart->dataset('EchoVC Mertics', 'geo',  [93, 25, 61, 70, 45, 83, 73, 45, 81, 50, 65, 18])
                ->color($borderColors)
                ->backgroundcolor($fillColors);
                break;
              default:
              // code...
              break;
          }
          // return view('chartLine', compact('chart'));
          return view('metrics.index')->with('chart', $chart);
      }

      public function store(Request $request)
      {
      //   $this->validate($request, [
      //     'fname' => 'required',
      //   ]);
      //
      //
      // //Create Contact
      // $contact = new Contact;
      // $contact->tags =$request->input('tags');
      // // $contact->user_id = auth()->user()->id;
      // $contact->save();
      //
      // return redirect('/contacts')->with('success', 'Contact Successful Created');
      }
}
