<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Models\Gender;
use App\Models\Superheroe;

Route::get('/', function () {
    echo "Hello guys this is my first Laravel application.";
    /*echo "<pre>";
    print_r(Universe::all());
    Universe::all();
    echo "</pre>";*/

    dd(Universe::all(), Superheroe::all(), Gender::all());

    //return view('welcome');
});
