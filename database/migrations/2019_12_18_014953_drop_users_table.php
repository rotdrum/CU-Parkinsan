<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('ignore_r');
            $table->dropColumn('clasp_r');
            $table->dropColumn('pleats_r');

            $table->dropColumn('ignore_l');
            $table->dropColumn('clasp_l');
            $table->dropColumn('pleats_l');

            $table->dropColumn('tname');
            $table->dropColumn('fname');
            $table->dropColumn('lname');
            $table->dropColumn('email');
            $table->dropColumn('username');
            $table->dropColumn('password');
            
            $table->dropColumn('remember_token');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
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
