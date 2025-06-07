<?php

namespace App\Http\Controllers;

use App\Models\tblDestinations;
use Illuminate\Http\Request;

class TblDestinationsController extends Controller
{
    public function fetchAllDestinatios()
    {
        $destinations = tblDestinations::findAll();
        return view('productspage')->with('destinations', $destinations);
    }
}
