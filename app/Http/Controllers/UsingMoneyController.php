<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\UsingMoney;

class UsingMoneyController extends Controller
{
    public function list(Request $request) {
        $data = UsingMoney::get();
        // return view('usingmoney.usingmoney-listcopy');
        return view('usingmoney.usingmoney-list');
    }

    public function formtransaction(Request $request) {
        $data = UsingMoney::get();
        // return view('usingmoney.usingmoney-listcopy');
        return view('usingmoney.usingmoney-formtransaction');
    }

    public function savetransaction(Request $request) {
        dd('success');
        return "success";
    }
}
