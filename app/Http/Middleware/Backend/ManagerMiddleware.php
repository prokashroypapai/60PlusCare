<?php

namespace App\Http\Middleware\Backend;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ManagerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() && in_array(Auth::user()->permission, [User::PERMISSION_ADMIN, User::PERMISSION_MANAGER])){
            return $next($request);
        }
        else{
            return redirect('admin/login');
        }
    }
}
