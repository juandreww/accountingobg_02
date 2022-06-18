<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \App\Models\KelapaBakar;
use \App\Models\User;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class KelapaBakarController extends Controller
{
    public function list(Request $request) {
        // $data = KelapaBakar::get();
        return view('kelapabakar.list');
    }

    public function save(Request $request) {

    }

    public function delete(Request $request) {

    }

    public function upload(Request $request) {

    }

    public function deletefile(Request $request) {

    }
}
