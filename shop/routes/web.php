<?php

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

use App\Participants;
use App\Products;

Route::get('/', function () {
    return view(
        'home',
        [
            'heading' => "Anka Services",
            "participants" => Participants::all(),
            "products" => Products::all()
        ]
    );
});

Route::get('/listings/{Participant}{Product}', function ($id) {
    return view(
        "item",
        [
            'heading' => "Anka Services",
            "participant" => Participants::find($id),
            "item" => Products::find($id)
        ]
    );
});
