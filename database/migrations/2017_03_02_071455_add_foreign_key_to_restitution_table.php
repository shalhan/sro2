<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToRestitutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restitutions', function (Blueprint $table) {
             $table->integer('location_id')->unsigned()->nullable();
             $table->integer('info_id')->unsigned()->nullable();
             $table->foreign('location_id')->references('id')->on('locations');
             $table->foreign('info_id')->references('id')->on('informations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restitutions', function (Blueprint $table) {
            //
        });
    }
}
