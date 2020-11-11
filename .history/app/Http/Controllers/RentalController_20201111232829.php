<?php

namespace App\Http\Controllers;

use App\Models\Rental as ModelsRental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function all()
    {
        $rental = ModelsRental::all();
        return response()->json($rental);

    }
}
