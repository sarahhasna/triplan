<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight as ModelsFlight;

class FlightController extends Controller
{
    public function all()
    {
        $flight = ModelsFlight::all();
        return response()->json($flight);

    }
}
