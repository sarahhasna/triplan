<?php

namespace App\Http\Controllers;

use App\Models\Hotel as ModelsHotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function all()
    {
        $hotel = ModelsHotel::all();
        return response()->json($hotel);

    }
}
