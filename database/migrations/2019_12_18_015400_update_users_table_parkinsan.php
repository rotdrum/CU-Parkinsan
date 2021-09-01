<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTableParkinsan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('tname');
            $table->string('fname');
            $table->string('lname');
            $table->string('age');
            $table->string('email');
            $table->string('username')->unique();
            $table->string('password');
            $table->float('ignore_r', 4, 4);
            $table->float('clasp_r', 4, 4);
            $table->float('pleats_r', 4, 4);
            $table->float('ignore_l', 4, 4);
            $table->float('clasp_l', 4, 4);
            $table->float('pleats_l', 4, 4);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
