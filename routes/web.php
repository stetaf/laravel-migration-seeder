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
    $packages = Package::where('type', 'hotel')
                        ->get();
    $type = 'Hotel';
    
    return view('packages.type', compact('packages', 'type'));
})->name('packages.hotels');

Route::get('/residence', function () {
    $packages = Package::where('type', 'residence')
                        ->get();
    $type = 'Residence';
    
    return view('packages.type', compact('packages', 'type'));
})->name('packages.residence');

Route::get('/b&b', function () {
    $packages = Package::where('type', 'b&b')
                        ->get();
    $type = 'B&B';
    
    return view('packages.type', compact('packages', 'type'));
})->name('packages.b&b');

Route::get('/apartments', function () {
    $packages = Package::where('type', 'apartments')
                        ->get();
    $type = 'Apartments';
    
    return view('packages.type', compact('packages', 'type'));
})->name('packages.apartments');
