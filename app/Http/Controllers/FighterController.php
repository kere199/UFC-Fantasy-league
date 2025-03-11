<?php
// app/Http/Controllers/FighterController.php
namespace App\Http\Controllers;

use App\Models\Fighter;
use Illuminate\Http\Request;

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
}
