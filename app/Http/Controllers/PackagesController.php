<?php

namespace App\Http\Controllers;

use App\Models\Packages as ModelsPackage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function all()
    {
        $package = ModelsPackage::all();
        return response()->json($package);

    }
    public function index()
    {
        //$package= ModelsPackage::with('Things')->get();
        //return response()->json(CategoryResource::collection($package));
        $package= ModelsPackage::withCount('countTodos')
                    ->with('countTodos')
                    ->get();
        return response()->json($package);
        //$json = ModelsPackage::withCount('countTodos')->with('countTodos')->get();
    }

    public function choosen()
    {
        $package = DB::table('packages')
                    ->join('cities','packages.Cities','=','cities.city')
                    ->select('packages.days','cities.*','packages.budget')
                    ->get();
        return response()->json($package);
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
