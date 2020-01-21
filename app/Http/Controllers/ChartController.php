<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Charts\UserLineChart;

class ChartController extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function chartLine()
    {
        $api = url('/chart-line-ajax');

        $chart = new UserLineChart;
        $chart->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']);
        $chart->dataset('Users by trimester', 'line', [100, 25, 13])
            ->color('#51C1C0')
            ->backgroundcolor('#51C1C0');
        return view('chartLine', compact('chart'));
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function chartLineAjax(Request $request)
    {
        $year = $request->has('year') ? $request->year : date('Y');
        $users = User::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', $year)
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');

        $chart = new UserLineChart;

        $chart->dataset('New User Register Chart', 'line', $users)->options([
                    'fill' => 'true',
                    'borderColor' => '#51C1C0'
                ]);

        return $chart->api();
    }


    public function index()
    {
        $users = User::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');

        // $chart = new UserLineChart;
        // $chart->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']);
        // $chart->dataset('New User Register Chart', 'line', $users)->options([
        //     'fill' => 'true',
        //     'borderColor' => '#51C1C0'
        // ]);
        //
        // return view('chartLine', compact('chart'));

        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"

        ];
        $chart = new UserLineChart;
        // $chart->minimalist(true);  //This shows the graph line
        $chart->labels(['Jan', 'Feb', 'Mar']);
        $chart->dataset('Users by trimester', 'doughnut', [100, 25, 13])
            ->color($borderColors)
            ->backgroundcolor($fillColors);
        return view('chartLine', compact('chart'));
    }

    public function graph()
      {
          $chart = new UserLineChart;
          $chart->labels(['Jan', 'Feb', 'Mar']);
          $chart->dataset('Users by trimester', 'line', [10, 25, 8])
              ->color("rgb(255, 99, 132)")
              ->backgroundcolor("rgb(255, 199, 231)");
          return view('chartLine', compact('chart'));
      }

      public function bar()
    {
        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"

        ];
        $chart = new UserLineChart;
        // $usersChart->minimalist(true);
        $chart->labels(['Jan', 'Feb', 'Mar']);
        $chart->dataset('Users by trimester', 'bar', [10, 25, 13])
            ->color($borderColors)
            ->backgroundcolor($fillColors);
        return view('chartLine', compact('chart'));
    }

    public function select($type)
      {
        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"
      ];
        switch ($type)
                {
                case 'bar':
                  $chart = new UserLineChart;
                  // $usersChart->minimalist(true);
                  $chart->labels(['Jan', 'Feb', 'Mar' , 'April', 'May', 'June']);
                  $chart->dataset('EchoVC Mertics', 'bar',  [93, 25, 61, 70, 45, 83])
                  ->color($borderColors)
                  ->backgroundcolor($fillColors);
                  break;
                case 'pie':
                  $chart = new UserLineChart;
                  // $chart->minimalist(true);  //This shows the graph line
                  $chart->labels(['Jan', 'Feb', 'Mar' , 'April', 'May', 'June']);
                  $chart->dataset('EchoVC Mertics', 'pie',  [93, 25, 61, 70, 45, 83])
                  ->color($borderColors)
                  ->backgroundcolor($fillColors);
                  break;
                case 'donut':
                  $chart = new UserLineChart;
                  // $chart->minimalist(true);  //This shows the graph line
                  $chart->labels(['Jan', 'Feb', 'Mar' , 'April', 'May', 'June']);
                  $chart->dataset('EchoVC Mertics', 'doughnut',  [93, 25, 61, 70, 45, 83])
                  ->color($borderColors)
                  ->backgroundcolor($fillColors);
                  break;
                case 'line':
                  $chart = new UserLineChart;
                  $chart->labels(['Jan', 'Feb', 'Mar' , 'April', 'May', 'June']);
                  $chart->dataset('EchoVC Mertics', 'line',  [93, 25, 61, 70, 45, 83])
                  ->color("rgb(255, 99, 132)")
                  ->backgroundcolor("rgb(255, 199, 231)");
                  break;
                case 'area':
                  $chart = new UserLineChart;
                  $chart->labels(['Jan', 'Feb', 'Mar' , 'April', 'May', 'June']);
                  $chart->dataset('EchoVC Mertics', 'area', [93, 25, 61, 70, 45, 83])
                  ->color($borderColors)
                  ->backgroundcolor($fillColors);
                  break;
                case 'geo':
                  $chart = new UserLineChart;
                  $chart->minimalist(true);  //This shows the graph line
                  $chart->labels(['Jan', 'Feb', 'Mar' , 'April', 'May', 'June']);
                  $chart->dataset('EchoVC Mertics', 'geo',  [93, 25, 61, 70, 45, 83])
                  ->color($borderColors)
                  ->backgroundcolor($fillColors);
                    break;
                default:
                // code...
                break;
            }
            return view('chartLine', compact('chart'));
        }
}
