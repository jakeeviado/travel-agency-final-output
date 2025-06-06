<?php

namespace App\Http\Controllers;

use App\Models\tblPackages;

class TblPackagesController extends Controller
{
    public function fetchAllPackages()
    {
        $packages = tblPackages::with('destination')->get();
        return view('homepage')->with('packages', $packages);
    }

    public function fetchPackageById($package_id)
    {
        $package = tblPackages::with('destination')->findOrFail($package_id);
        return view('productDescription')->with('package', $package);
    }


}
