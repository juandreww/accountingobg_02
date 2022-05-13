<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\UsingMoney;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsingMoneyController extends Controller
{
    public function list(Request $request) {
        $now = now()->addHours(7)->firstOfMonth()->toDateTimeString();
        // $data = UsingMoney::where('date','>=',$now)->get();
        $data = UsingMoney::orderBy('date')->get();
        // return view('usingmoney.usingmoney-listcopy');
        return view('usingmoney.usingmoney-list', ['data' => $data]);
    }

    public function formtransaction(Request $request) {
        $data = UsingMoney::get();
        // return view('usingmoney.usingmoney-listcopy');
        return view('usingmoney.usingmoney-formtransaction');
    }

    public function savetransaction(Request $request) {
        $now = now()->addHours(7)->toDateTimeString();
        $uuid = Str::uuid()->toString();
        $data = new UsingMoney();
        $data->uid = $uuid;
        $data->created_at = $now;
        $data->date = $request->date;
        $data->amount = $request->amount;
        $data->note = $request->note;
        $data->save();

        $data = UsingMoney::get();
        // return view('usingmoney.usingmoney-listcopy');
        return view('usingmoney.usingmoney-list', ['data' => $data]);
    }
}
