<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        //echo 'dsfdsfdsf';
        return view('admin.index.index');
    }
   
}
