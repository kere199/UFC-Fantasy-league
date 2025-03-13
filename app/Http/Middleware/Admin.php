<?php
// app/Http/Middleware/Admin.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::user()->is_admin) {
            return redirect()->route('home')->with('error', 'You do not have admin access.');
        }

        return $next($request);
    }
}
