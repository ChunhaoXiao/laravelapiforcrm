<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function store(Request $request) {
        $url = $request->picture->store('uploads');
        return response()->json(['path' => asset(Storage::url($url)), 'savepath' => $url]);
    }
}
