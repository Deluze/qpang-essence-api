<?php

use App\Models\Player;
use App\Models\PlayerStats;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_stats', function (Blueprint $table) {
            $table->unsignedBigInteger('player_id')->primary();

            $table->unsignedInteger('kills')->default(0);
            $table->unsignedInteger('deaths')->default(0);
            $table->unsignedInteger('n_won')->default(0);
            $table->unsignedInteger('n_lost')->default(0);
            $table->unsignedInteger('n_drew')->default(0);
            $table->unsignedInteger('m_won')->default(0);
            $table->unsignedInteger('m_lost')->default(0);
            $table->unsignedInteger('m_drew')->default(0);
            $table->unsignedInteger('playtime')->default(0);
            $table->unsignedInteger('slacker_points')->default(0);
        });

        Schema::table('players', function (Blueprint $table) {
            $table->dropColumn('playtime');
        });

        Player::query()->each(function (Player $player) {
            PlayerStats::query()->create([
                'player_id' => $player->getKey(),
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
        Schema::dropIfExists('player_stats');
    }
}
