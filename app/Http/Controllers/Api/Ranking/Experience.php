<?php

namespace App\Http\Controllers\Api\Ranking;

use App\Http\Resources\Api\PlayerResource;
use App\Models\Player;

class Experience
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function __invoke()
    {
        return PlayerResource::collection(Player::query()->orderByDesc('experience')->offset(0)->limit(100)->get());
    }
}
