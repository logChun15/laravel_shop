<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIfEmailVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->user()->email_verified) {
            // 如果是 AJAX 请求，则通过 JSON 返回
            if ($request->expectsJson()) {
                return response()->json(['msg' => '请先验证邮箱'], 400);
            }
            return redirect(route('email_verify_notice'));
        }
        return $next($request);
    }


}
