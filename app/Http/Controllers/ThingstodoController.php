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
}
