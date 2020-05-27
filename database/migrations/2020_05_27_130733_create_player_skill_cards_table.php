<?php

use App\Models\Player;
use App\Models\PlayerSkillCards;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerSkillCardsTable extends Migration
{
    public $timestamps = false;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_skill_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('player_id');
            $table->unsignedBigInteger('skill_1')->nullable();
            $table->unsignedBigInteger('skill_2')->nullable();
            $table->unsignedBigInteger('skill_3')->nullable();

            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('skill_1')->references('id')->on('player_items')->onDelete('set null');
            $table->foreign('skill_2')->references('id')->on('player_items')->onDelete('set null');
            $table->foreign('skill_3')->references('id')->on('player_items')->onDelete('set null');
        });

        Player::query()->each(function (Player $player) {
            PlayerSkillCards::query()->create([
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
        Schema::dropIfExists('player_skill_cards');
    }
}
