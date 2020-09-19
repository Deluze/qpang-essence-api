<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDefaultValueInPlayerStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player_stats', function (Blueprint $table) {
            $table->unsignedInteger('melee_kills')->default(0)->change();
            $table->unsignedInteger('gun_kills')->default(0)->change();
            $table->unsignedInteger('launcher_kills')->default(0)->change();
            $table->unsignedInteger('bomb_kills')->default(0)->change();
            $table->unsignedInteger('headshot_kills')->default(0)->change();
            $table->unsignedInteger('headshot_deaths')->default(0)->change();
            $table->unsignedInteger('team_kills')->default(0)->change();
            $table->unsignedInteger('team_deaths')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
