<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('users', function (Blueprint $table) {
            $table->float('ignore_r', 4, 4);
            $table->float('clasp_r', 4, 4);
            $table->float('pleats_r', 4, 4);
            $table->float('ignore_l', 4, 4);
            $table->float('clasp_l', 4, 4);
            $table->float('pleats_l', 4, 4);
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
