<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    public function index() {
        return Material::all()->each->fullPath()->pluck('path', 'identity');
    }
}
