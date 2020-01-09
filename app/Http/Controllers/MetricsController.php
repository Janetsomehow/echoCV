<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;
use App\Http\Requests\MetricsRequest;

class MetricsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  PostRequest  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(PostRequest $request)
    {
        /**
         * Service Account demo
         */

        $append = [
            $request->input('name'),
            $request->input('sheet'),
            now()->toDateTimeString(),
        ];

        Sheets::spreadsheet(config('metrics.metric_spreadsheet_id'))
              ->sheet(config('metrics.metric_sheet_id'))
              ->append([$append]);

        return back();
    }
}
