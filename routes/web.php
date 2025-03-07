<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Models\Gender;
use App\Models\Superheroe;
use App\Http\Controllers\GenderController;

Route::get('/', function () {
    echo "Hello guys this is my first Laravel application.";
    /*echo "<pre>";
    print_r(Universe::all());
    Universe::all();
    echo "</pre>";*/

    dump(Universe::all());

    //return view('welcome');
});

Route::get('/gender', [GenderController::class, 'index']);
