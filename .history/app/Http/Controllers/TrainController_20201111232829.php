<?php

namespace App\Http\Controllers;

use App\Models\Train as ModelsTrain;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function all()
    {
        $train = ModelsTrain::all();
        return response()->json($train);

    }
}
