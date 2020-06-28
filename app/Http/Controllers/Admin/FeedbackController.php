<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index() {
        $datas = Feedback::with('user')->withCount('reply')->latest()->paginate(15);
        return view('admin.feedback.index', ['datas' => $datas]);
    }

    public function show(Feedback $feedback)
    {
        return view('admin.feedback.show', ['feedback' => $feedback]);
    }
}
