<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayerStatsResource extends JsonResource
{

    /**
     * @var PlayerStatsResource
     */
    public $resource;

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'kills' => $this->resource->kills,
            'deaths' => $this->resource->deaths,
            'playtime' => $this->resource->playtime,
            'melee_kills' => $this->resource->melee_kills,
            'gun_kills' => $this->resource->gun_kills,
            'launcher_kills' => $this->resource->launcher_kills,
            'bomb_kills' => $this->resource->bomb_kills,
            'headshot_kills' => $this->resource->headshot_kills,
            'headshot_deaths' => $this->resource->headshot_deaths,
            'team_kills' => $this->resource->team_kills,
            'team_deaths' => $this->resource->team_deaths,
            'n_won' => $this->resource->n_won,
            'n_drew' => $this->resource->n_drew,
            'n_lost' => $this->resource->n_lost,
            'm_won' => $this->resource->m_won,
            'm_drew' => $this->resource->m_drew,
            'm_lost' => $this->resource->m_lost,
        ];
    }
}
