<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Http\Requests\FeedbackRequest;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function store(FeedbackRequest $request) {
        Auth::user()->feedbacks()->create($request->input());
        return response()->json(['status' => 0]);
    }
}
