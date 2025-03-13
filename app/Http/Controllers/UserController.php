<?php
// app/Http/Controllers/UserController.php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show()
    {
        $user = Auth::user(); // Get the authenticated user
        $fighters = $user->fighters; // Load the user's fighters
        return view('sites.profile', compact('user', 'fighters'));
    }

    public function leaderboard()
    {
        $users = User::orderBy('points', 'desc')->paginate(10);
        return view('sites.leaderboard', compact('users'));
    }
}
