<?php

use App\Models\Player;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultWeaponsToEveryPlayer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Player::query()->each(function (Player $player) {
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('every_player', function (Blueprint $table) {
            //
        });
    }
}
