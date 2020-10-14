<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Choiceoption extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choiceoption', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('option');
            $table->integer('choice_q_id')->unsigned();
            $table->foreign('choice_q_id')->references('id')->on('choicequestion');
            $table->integer('choice_id')->unsigned();
            $table->foreign('choice_id')->references('id')->on('createchoiceanswer');
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
