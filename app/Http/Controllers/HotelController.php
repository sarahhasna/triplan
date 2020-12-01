<?php

namespace App\Http\Controllers;

use App\Models\Hotel as ModelsHotel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function all()
    {
        $hotel = ModelsHotel::all();
        return response()->json($hotel);

    }

    public function proses(Request $request)
    {
        $loc = $request->input('location');
        $price = $request->input('price');
        $hotel = DB::table('hotels')
                    ->where('location', '=',$loc)
                    ->Where('price','<=',$price)
                    ->select('hotels.*')
                    ->get();
        return response()->json($hotel);
    }
    
}
