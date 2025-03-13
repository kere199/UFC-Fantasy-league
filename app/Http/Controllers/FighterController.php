<?php
// app/Http/Controllers/FighterController.php
namespace App\Http\Controllers;

use App\Models\Fighter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FighterController extends Controller
{
    public function index()
    {
        $fighters = Fighter::paginate(9);
        return view('sites.fighters', compact('fighters'));
    }

    public function show(Fighter $fighter)
    {
        return view('sites.fighter', compact('fighter'));
    }

    public function buy(Request $request, Fighter $fighter)
    {
        $user = Auth::user();

        // Check if user already owns the fighter
        if ($user->fighters()->where('fighter_id', $fighter->id)->exists()) {
            return redirect()->route('profile')->with('error', 'You already own this fighter.');
        }

        // Check if user has enough coins
        if ($user->coins < $fighter->price) {
            return redirect()->route('fighters.index')->with('error', 'Insufficient coins to buy ' . $fighter->name . '.');
        }

        // Deduct coins and attach fighter
        $user->coins -= $fighter->price;
        $user->fighters()->attach($fighter->id);
        $user->save();

        return redirect()->route('profile')->with('success', 'Successfully bought ' . $fighter->name . '!');
    }
}

