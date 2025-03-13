<?php
// app/Models/Fight.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fight extends Model
{
    use HasFactory;

    protected $fillable = [
        'fighter_1_id',
        'fighter_2_id',
        'winner_id',
        'method',
    ];

    protected $casts = [
        'method' => 'string',
    ];

    public function fighter1()
    {
        return $this->belongsTo(Fighter::class, 'fighter_1_id');
    }

    public function fighter2()
    {
        return $this->belongsTo(Fighter::class, 'fighter_2_id');
    }

    public function winner()
    {
        return $this->belongsTo(Fighter::class, 'winner_id');
    }
}
