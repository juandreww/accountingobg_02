<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Role;
use Illuminate\Support\Str;
use \App\Models\User;

class MainController extends Controller
{
    public function users(Request $request) {
        $user = User::with('role')->whereNotNull('role')->first();
        return $user;
        $user->role = '12428321-8842-4dac-93aa-b741631ab933';
        $user->save();
        return $user;

        $uuid = Str::uuid()->toString();
        $data = new Role();
        $data->uid = $uuid;
        $data->name = 'Test';
        $data->save();
        return $data;
    }
}
