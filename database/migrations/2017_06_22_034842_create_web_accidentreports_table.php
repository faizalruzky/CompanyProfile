<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebAccidentreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::create('web_accidentreports', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->string('seriousaccidents_id');
            $table->string('accidents_id');
            $table->string('incidents_id');
            $table->timestamps();
        });
    }
}
