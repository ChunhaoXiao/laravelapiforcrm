<?php

namespace App\Http\Middleware;

use Closure;

class FeedbackRequestCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $feedback = $request->user()->feedbacks()->latest()->first();
        if(now()->diffInMinutes($feedback->created_at) < 5)
        {
            return response('Hello World', 422)->header('errors', '哈哈哈哈');
        }

        return $next($request);
    }
}
