<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceiptController extends Controller
{
    protected function addToReceiptTable(Request $request)
    {
        Receipt::create([
            'customerName' => "Peter",
            'participantID' => $request['participantID'],
            'quantity' => number_format($request['quantity']),
        ]);

        if (DB::select("select participantID from participants where participantID = " . $request['participantID'])) {
            if (DB::select("select customerName from receipts where customerName = 'Peter'")) {
                if (number_format($request['quantity']) > 1) {
                    DB::update("update participants set performance = 4 where participantID = " . $request['participantID']);
                } else {
                    DB::update("update participants set performance = 2 where participantID = " . $request['participantID']);
                }
            }
            DB::update("update participants set performance = 1 where participantID = " . $request['participantID']);
        }

        return redirect()->intended("/");
    }
}
