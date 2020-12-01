<?php

namespace App\Http\Controllers;

use App\Models\thingstodo as ModelsThings;
use Illuminate\Http\Request;

class ThingstodoController extends Controller
{
    public function all()
    {
        $thingstodos = ModelsThings::all();
        return response()->json($thingstodos);
    }
    public function create(request $request){
        $package = new ModelsPackage;
        $package->idPackages = $request->idPackages;
        $package->Cities = $request->Cities;
        $package->Things = $request->Things;
        $package->name = $request->name;
        $package->budget = $request->budget;
        $package->days = $request->days;
        $package->transportation = $request->transportation;
        $package->save();
        return response()->json($package);
        //cities foreign key ke cities
    }
}
