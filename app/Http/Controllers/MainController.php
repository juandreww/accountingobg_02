<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Role;

class MainController extends Controller
{
    public function users(Request $request) {
        $data = new Role();
        $data->name = 'Test';
        $data->save();
        dd($data);
    }
}
