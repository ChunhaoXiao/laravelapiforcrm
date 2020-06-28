<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    public function index() {
        return Auth::user()->notices()->latest()->paginate();
    }

    public function show(Notice $notice) {
        return $notice;
    }
}
