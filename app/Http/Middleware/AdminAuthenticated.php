<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticated
{
  /**
   * Handle an incoming request.
   *
   * @param Request $request
   * @param  \Closure(Request): (Response|RedirectResponse)  $next
   * @return Response|RedirectResponse
   */
  public function handle(Request $request, Closure $next)
  {
    if (Auth::guard('admin')->user()) {
      return $next($request);
    }
    if ($request->ajax() || $request->wantsJson()) {
      return response('Unauthorized.', 401);
    } else {
      return redirect(route('auth-login'));
    }
  }
}
