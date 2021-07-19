<?php

use App\Package;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $packages = Package::all();

    return view('home', compact('packages'));
})->name('home');

Route::get('/hotel', function () {
    $packages = Package::all();
    $type = 'Hotel';

    $filtered = $packages->filter(function ($package, $key) {
        return strtolower($package['type']) == 'hotel';
    });
    
    return view('packages.type', compact('filtered', 'type'));
})->name('packages.hotels');

Route::get('/residence', function () {
    $packages = Package::all();
    $type = 'Residence';

    $filtered = $packages->filter(function ($package, $key) {
        return strtolower($package['type']) == 'residence';
    });
    
    return view('packages.type', compact('filtered', 'type'));
})->name('packages.residence');

Route::get('/b&b', function () {
    $packages = Package::all();
    $type = 'B&B';

    $filtered = $packages->filter(function ($package, $key) {
        return strtolower($package['type']) == 'b&b';
    });
    
    return view('packages.type', compact('filtered', 'type'));
})->name('packages.b&b');

Route::get('/apartments', function () {
    $packages = Package::all();
    $type = 'Appartamenti';

    $filtered = $packages->filter(function ($package, $key) {
        return strtolower($package['type']) == 'apartments';
    });
    
    return view('packages.type', compact('filtered', 'type'));
})->name('packages.apartments');
