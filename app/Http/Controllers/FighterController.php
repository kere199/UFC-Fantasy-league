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

    public function store(Request $request, Fighter $fighter)
    {
        $user = Auth::user();

        if ($user->fighters()->where('fighter_id', $fighter->id)->exists()) {
            return redirect()->route('profile')->with('error', 'You already own this fighter.');
        }

        if ($user->coins < $fighter->price) {
            return redirect()->route('fighters.index')->with('error', 'Insufficient coins to buy ' . $fighter->name . '.');
        }

        $user->coins -= $fighter->price;
        $user->fighters()->attach($fighter->id);
        $user->save();

        return redirect()->route('profile')->with('success', 'Successfully bought ' . $fighter->name . '!');
    }

    public function destroy(Request $request, Fighter $fighter)
    {
        $user = Auth::user();

        if (!$user->fighters()->where('fighter_id', $fighter->id)->exists()) {
            return redirect()->route('profile')->with('error', 'You do not own this fighter.');
        }

        $user->fighters()->detach($fighter->id);
        $user->coins += $fighter->price;
        $user->save();

        return redirect()->route('profile')->with('success', 'Successfully sold ' . $fighter->name . ' for ' . $fighter->price . ' coins!');
    }
}
