<?php

namespace App\Http\Controllers;

use App\Models\tblPackages;
use Illuminate\Http\Request;

class TblPackagesController extends Controller
{
    public function fetchAllPackages(Request $request)
    {
        $packages = tblPackages::with('destination')->get();
        return view('homepage')->with('packages', $packages);
    }

    public function fetchPackageById(Request $request, $id)
    {
        $package = tblPackages::findOrFail($id);
        if ($package) {
            return view('views.productdescriptionpage')->with('package', $package);
        } else {
            return redirect()->back()->with('error', 'Package not found');
        }
    }
}
