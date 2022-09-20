<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ReceiptController;
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

Route::get('/dashboard', function () {
    return view(
        'dashboard'
    );
});

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
Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/login', [LoginController::class, "getLogin"])->name('login');

Route::post('/create', [RegisterController::class, "createCustomer"])->name('create');

Route::post('/authenticate', [LoginController::class, 'postLogin'])->name("authenticate");

Route::post('/purchase', [ReceiptController::class, "addToReceiptTable"])->name('purchase');
