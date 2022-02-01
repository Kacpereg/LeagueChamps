<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;
    protected $fillable = [
        'players',
        'date',
    ];

    protected $casts = [
        'players'=>'array',
    ];

    public function getTournament()
    {
        return Tournament::find($this->id);
    }
}
