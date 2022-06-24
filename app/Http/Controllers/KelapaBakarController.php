<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \App\Models\KelapaBakar;
use \App\Models\User;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Faker\Factory as Faker;

class KelapaBakarController extends Controller
{
    public function list(Request $request) {
        $data = KelapaBakar::get();
        return view('kelapabakar.list', ['data' => $data]);
    }

    public function show(Request $request) {
    }

    public function save(Request $request) {
        // $request = $request->getContent();
        $now = now()->addHours(7)->toDateTimeString();
        $uuid = Str::uuid()->toString();
        $data = new KelapaBakar();
        $data->uid = $uuid;
        $data->created_at = $now;
        $data->date = $request->date;
        $data->type = $request->type;
        $data->type2 = $request->type2;
        $data->quantity = $request->quantity;
        $data->price = $request->price;
        $data->totalamount = $data->price * $data->quantity;
        $data->save();

        $data = KelapaBakar::get();
        return view('kelapabakar.list', ['data' => $data]);
    }

    public function upload(Request $request) {

    }

    public function delete(Request $request) {

    }
}
