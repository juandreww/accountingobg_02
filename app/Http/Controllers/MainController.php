<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Role;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function users(Request $request) {
        $uuid = Str::uuid()->toString();
        $data = new Role();
        $data->uid = $uuid;
        $data->name = 'Test';
        $data->save();
        return $data;
    }
}
