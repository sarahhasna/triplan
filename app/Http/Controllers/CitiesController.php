<?php

namespace App\Http\Controllers;

use App\Models\Cities as ModelsCities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function all()
    {
        $cities = ModelsCities::all();
        return response()->json($cities);

    }
}
