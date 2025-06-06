<?php

use App\Http\Controllers\TblPackagesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/', [TblPackagesController::class, 'fetchAllPackages'])->name('packages.index');

Route::get('/packages/{package_id}', [TblPackagesController::class, 'fetchPackageById'])->name('package.show');

Route::get('/aboutus', function () {
    return view('aboutus');
});