<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteFieldDeletedAtFromHseclinicvisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('web_hseclinicvisits', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('web_hseclinicvisits', function (Blueprint $table) {
            //
        });
    }
}
