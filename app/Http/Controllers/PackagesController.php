<?php

namespace App\Http\Controllers;

use App\Models\Packages as ModelsPackage;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function all()
    {
        $package = ModelsPackage::all();
        return response()->json($package);

    }
}
