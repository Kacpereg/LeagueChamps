<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;
    protected $fillable = [
        'tournament_id',
        'lobby_name',
        'lobby_password',
        'team1',
        'team2',
        'game_date',
    ];

    protected $casts = [
        'team1'=>'array',
        'team2'=>'array',
    ];
}
