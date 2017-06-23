<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelWebAccidentreports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_accidentreports', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->integer('january_sa');
            $table->integer('january_a');
            $table->integer('january_i');
            $table->integer('february_sa');
            $table->integer('february_a');
            $table->integer('february_i');
            $table->integer('march_sa');
            $table->integer('march_a');
            $table->integer('march_i');
            $table->integer('april_sa');
            $table->integer('april_a');
            $table->integer('april_i');
            $table->integer('may_sa');
            $table->integer('may_a');
            $table->integer('may_i');
            $table->integer('june_sa');
            $table->integer('june_a');
            $table->integer('june_i');
            $table->integer('july_sa');
            $table->integer('july_a');
            $table->integer('july_i');
            $table->integer('august_sa');
            $table->integer('august_a');
            $table->integer('august_i');
            $table->integer('september_sa');
            $table->integer('september_a');
            $table->integer('september_i');
            $table->integer('october_sa');
            $table->integer('october_a');
            $table->integer('october_i');
            $table->integer('november_sa');
            $table->integer('november_a');
            $table->integer('november_i');
            $table->integer('december_sa');
            $table->integer('december_a');
            $table->integer('december_i');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('web_accidentreports', function (Blueprint $table) {
            //
        });
    }
}
