<?php

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

use App\Models\Participants;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();
Route::get('/items/{participantID}/{productID}', function ($participantID, $productID) {
    return view(
        "product",
        [
            'heading' => "Anka Services",
            "participant" => Participants::find($participantID),
            "product" => Products::find($productID)
        ]
    );
});
