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
        'photo_url',
        'price',
    ];



    // Optionally cast birthday to a date
    protected $casts = [
        'birthday' => 'date',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
