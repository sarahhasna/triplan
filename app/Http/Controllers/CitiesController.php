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
    public function index()
    {
        //$package= ModelsPackage::with('Things')->get();
        //return response()->json(CategoryResource::collection($package));
        $package= ModelsCities::withCount('countTodos')
                    ->with('countTodos')
                    ->get();
        return response()->json($package);
        //$json = ModelsPackage::withCount('countTodos')->with('countTodos')->get();
    }
}
