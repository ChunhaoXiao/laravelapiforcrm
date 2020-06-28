<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class ThreadController extends Controller
{
    public function index(User $user) {
        $datas = $user->threads()->paginate();
        return view('admin.thread.index', ['datas' => $datas]);
    }
}
