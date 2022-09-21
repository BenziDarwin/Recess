<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ReceiptController extends Controller
{
    protected function addToReceiptTable(Request $request)
    {
        if (Session::get("name") == null) {
            return redirect()->intended("/login");
        } else {
            Receipt::create([
                'customerName' => Session::get("name"),
                'participantID' => $request['participantID'],
                'quantity' => number_format($request['quantity']),
            ]);
        }

        if (DB::select("select participantID from participants where participantID = " . $request['participantID'])) {
            if (count(DB::select("select customerName from receipts where customerName = 'Peter'")) > 1) {
                if (number_format($request['quantity']) >= 1) {
                    DB::update("update participants set performance = performance+4 where participantID = " . $request['participantID']);
                } else {
                    DB::update("update participants set performance = performance+2 where participantID = " . $request['participantID']);
                }
            }
            DB::update("update participants set performance = performance+1 where participantID = " . $request['participantID']);
        }

        return redirect()->intended("/");
    }
}
