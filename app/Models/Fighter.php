<?php
// app/Models/Fighter.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fighter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birthday',
        'weightclass',
    ];

    // Optionally cast birthday to a date
    protected $casts = [
        'birthday' => 'date',
    ];
}
