<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTeamKillsAndDeathsToPlayerStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player_stats', function (Blueprint $table) {
            $table->unsignedInteger('team_kills');
            $table->unsignedInteger('team_deaths');
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
            $table->dropColumn(['team_kills', 'team_deaths']);
        });
    }
}
