<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function store(Request $request, AuthService $service) {

        $res = $service->authUser($request->code);
        
        return $res;
    }
}
