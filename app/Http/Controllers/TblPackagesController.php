<?php

namespace App\Http\Controllers;

use App\Models\tblPackages;
use Illuminate\Http\Request;

class TblPackagesController extends Controller
{
    public function fetchAllPackages(Request $request)
    {
        $packages = tblPackages::findAll();
        return view('views.homepage')->with('employees', $packages);
    }

    public function fetchPackageById(Request $request, $id)
    {
        $package = tblPackages::find($id);
        if ($package) {
            return view('views.productdescriptionpage')->with('package', $package);
        } else {
            return redirect()->back()->with('error', 'Package not found');
        }
    }
}
