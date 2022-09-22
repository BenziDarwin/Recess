<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ReceiptController;
use App\Models\Customer;
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
use App\Models\Receipt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

function returnArray()
{
    $data = DB::select("select * from participants where performance = (select max(performance) from participants)");
    return $data;
}


function returnTotalProducts()
{
    $data = DB::select("select * from receipts");
    $n = 0;
    foreach ($data as $item) {
        $n = $n + $item->{"quantity"};
    };
    return $n;
}
Route::get('/', function () {
    return view(
        'home',
        [
            'heading' => "Anka Services",
            "participants" => Participants::all(),
            "products" => Products::all(),
            "winner" => returnArray()[0],
        ]
    );
});

Route::get('/dashboard', function () {
    return view(
        'dashboard',
        [
            "participants" => Participants::all(),
            "customers" => Customer::all(),
            "quantity" => returnTotalProducts(),
            "receipts" => Receipt::all()
        ]
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
