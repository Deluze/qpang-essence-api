<?php

namespace App\Listeners;

use App\Events\PlayerCreated;
use App\Models\PlayerSkillCards;
use App\Models\PlayerStats;

class OnPlayerCreated
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\PlayerCreated $event
     * @return void
     */
    public function handle(PlayerCreated $event)
    {
        /** @var \App\Models\Player $player */
        $player = $event->player;

        $player->equipment()->create([
            'character_id' => 333,
        ]);

        $player->equipment()->create([
            'character_id' => 343,
        ]);

        $player->equipment()->create([
            'character_id' => 578,
        ]);

        $player->equipment()->create([
            'character_id' => 579,
        ]);

        $player->equipment()->create([
            'character_id' => 850,
        ]);

        $player->equipment()->create([
            'character_id' => 851,
        ]);

        PlayerSkillCards::query()->create([
            'player_id' => $player->getKey(),
        ]);

        PlayerStats::query()->create([
            'player_id' => $player->getKey(),
        ]);

        $player->items()->create([
            'item_id'     => 1095172097, // home run king
            'period_type' => 254,
            'period'      => 1,
            'type'        => 87,
            'opened'      => true,
            'giftable'    => false,
            'boosted'     => false,
            'boost_level' => 0,
            'time'        => 0,
        ]);

        $player->items()->create([
            'item_id'     => 1095303169, // killing field
            'period_type' => 254,
            'period'      => 1,
            'type'        => 87,
            'opened'      => true,
            'giftable'    => false,
            'boosted'     => false,
            'boost_level' => 0,
            'time'        => 0,
        ]);

        $player->items()->create([
            'item_id'     => 1095368704, // cannon
            'period_type' => 254,
            'period'      => 1,
            'type'        => 87,
            'opened'      => true,
            'giftable'    => false,
            'boosted'     => false,
            'boost_level' => 0,
            'time'        => 0,
        ]);

        $player->items()->create([
            'item_id'     => 1095434241, // dynamite
            'period_type' => 254,
            'period'      => 1,
            'type'        => 87,
            'opened'      => true,
            'giftable'    => false,
            'boosted'     => false,
            'boost_level' => 0,
            'time'        => 0,
        ]);
    }
}
