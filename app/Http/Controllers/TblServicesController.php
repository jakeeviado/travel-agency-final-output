<?php

namespace App\Http\Controllers;

use App\Models\tbl_services;
use Illuminate\Http\Request;

class TblServicesController extends Controller
{
    public function index()
    {
        $services = tbl_services::all();
        return view('views.homepage', compact('services'));
    }
}
