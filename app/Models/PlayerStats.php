<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerStats extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'player_id';

    protected $fillable = [
        'player_id',
    ];
}
