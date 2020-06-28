<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Events\FeedbackReplied;

class FeedbackReplyController extends Controller
{
    public function store(Request $request, Feedback $feedback) {
        $relpy = $feedback->reply()->updateOrCreate(['feedback_id' => $feedback->id], $request->input());
        event(new FeedbackReplied($relpy));
        return response()->json(['status' => 0]);
    }
}
