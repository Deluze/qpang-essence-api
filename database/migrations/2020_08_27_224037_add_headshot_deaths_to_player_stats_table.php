<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHeadshotDeathsToPlayerStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player_stats', function (Blueprint $table) {
            $table->unsignedInteger('headshot_deaths');
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
            $table->dropColumn(['headshot_deaths']);
        });
    }
}
