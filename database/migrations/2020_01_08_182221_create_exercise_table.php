<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExerciseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->float('ex_ignore_r', 4, 4);
            $table->float('ex_clasp_r', 4, 4);
            $table->float('ex_pleats_r', 4, 4);
            $table->float('ex_ignore_l', 4, 4);
            $table->float('ex_clasp_l', 4, 4);
            $table->float('ex_pleats_l', 4, 4);
            
            $table->float('do_ignore_r', 4, 4);
            $table->float('do_clasp_r', 4, 4);
            $table->float('do_pleats_r', 4, 4);
            $table->float('do_ignore_l', 4, 4);
            $table->float('do_clasp_l', 4, 4);
            $table->float('do_pleats_l', 4, 4);

            $table->integer('s_ignore_r');
            $table->integer('s_clasp_r');
            $table->integer('s_pleats_r');
            $table->integer('s_ignore_l');
            $table->integer('s_clasp_l');
            $table->integer('s_pleats_l');

            $table->string('comment');

            $table->integer('patient_id');
            $table->integer('doctor_id');
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
        Schema::dropIfExists('exercise');
    }
}
