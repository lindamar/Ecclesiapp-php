<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParishAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parish_areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('pastoral_areas_id')->unsigned();

            $table->timestamps();

            $table->foreign('pastoral_areas_id')->references('id')->on('pastoral_areas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parish_areas');
    }
}
