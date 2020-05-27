<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlayerSkillCards extends Model
{

    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [
        'player_id', 'skill_1', 'skill_2', 'skill_3',
    ];

    /**
     * @return BelongsTo
     */
    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }
}
