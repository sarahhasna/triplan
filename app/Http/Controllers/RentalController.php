<?php

namespace App\Http\Controllers;

use App\Models\Rental as ModelsRental;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function all()
    {
        $rental = ModelsRental::all();
        return response()->json($rental);
    }
    public function proses(Request $request)
    {
        //$loc = $request->input('location');
        $price = $request->input('price');
        $rental = DB::table('rentals')
        //            ->where('location', '=',$loc)
                    ->where('price','<=',$price)
                    ->select('rentals.*')
                    ->get();
        return response()->json($rental);
    }
}
