<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createchoiceanswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('createchoiceanswer', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('choice_id')->unsigned();
            $table->foreign('choice_id')->references('id')->on('createdata');
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
