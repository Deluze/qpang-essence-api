<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGunStatsToPlayerStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player_stats', function (Blueprint $table) {
            $table->unsignedInteger('melee_kills');
            $table->unsignedInteger('gun_kills');
            $table->unsignedInteger('launcher_kills');
            $table->unsignedInteger('bomb_kills');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('player_stats', function (Blueprint $table) {
            $table->dropColumn(['melee_kills', 'gun_kills', 'launcher_kills', 'bomb_kills']);
        });
    }
}
