<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePastoralAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pastoral_areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('diocese_id')->unsigned();
            $table->timestamps();

            $table->foreign('diocese_id')->references('id')->on('diocese')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pastoral_areas');
    }
}
