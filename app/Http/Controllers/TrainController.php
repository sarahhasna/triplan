<?php

namespace App\Http\Controllers;

use App\Models\Train as ModelsTrain;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function all()
    {
        $train = ModelsTrain::all();
        return response()->json($train);

    }
    public function proses(Request $request)
    {
        $f_dept = $request->input('departure');
        $f_from = $request->input('from');
        $f_to = $request->input('to');
        $train = DB::table('trains')
                    ->where('departure', '=',$f_dept)
                    ->where('from','=',$f_from)
                    ->where('to','=',$f_to)
                    ->select('trains.*')
                    ->get();
        return response()->json($train);
    }
}
