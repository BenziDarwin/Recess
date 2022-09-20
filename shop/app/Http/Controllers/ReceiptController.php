<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    protected function addToReceiptTable(Request $request)
    {
        Receipt::create([
            'customerName' => "Peter",
            'participantID' => $request['participantID'],
            'quantity' => number_format($request['quantity']),
        ]);

        return redirect()->intended("/");
    }
}
