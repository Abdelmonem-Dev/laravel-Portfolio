<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CompleteYourData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       if (Auth::check()) {
        $user = Auth::user();

        if ($user->status === 'pending') {
            Log::info('User redirected to config.addName.');

            return redirect()->route('config.addName')->with('message', 'Please complete your profile.');
        }
       }
        return $next($request);
    }
}
