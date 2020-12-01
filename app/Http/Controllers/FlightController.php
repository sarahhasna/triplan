<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Flight as ModelsFlight;

class FlightController extends Controller
{
    public function all()
    {
        $flight = ModelsFlight::all();
        return response()->json($flight);

    }
    
    public function proses(Request $request)
    {
        $f_dept = $request->input('departure');
        $f_from = $request->input('from');
        $f_to = $request->input('to');
        $flight = DB::table('flights')
                    ->where('departure', '=',$f_dept)
                    ->where('from','=',$f_from)
                    ->where('to','=',$f_to)
                    ->select('flights.*')
                    ->get();
        return response()->json($flight);
    }
}
