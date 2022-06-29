<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request) {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $folder = now()->timestamp . '-' .uniqid();
            $file->storeAs('avatars/tmp/' . $folder, $filename);
            return $folder;
        }
    }
}
