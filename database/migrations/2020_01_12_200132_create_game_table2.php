<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('lavel');
            $table->integer('type');
            $table->float('lowvalue', 4, 4);
            $table->float('highvalue', 4, 4);
            $table->float('do_lowvalue', 4, 4);
            $table->float('do_highvalue', 4, 4);
            $table->integer('status');
            $table->unsignedBigInteger("user_id");
            $table->timestamps();
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_table2');
    }
}
