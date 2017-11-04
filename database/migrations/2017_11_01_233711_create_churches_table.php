<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('churches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nickname');
            $table->string('address');
            $table->string('phone');
            $table->string('history');
            $table->string('institution_name');
            $table->string('cover_page');
            $table->integer('parish_areas_id')->unsigned();
            $table->integer('municipalities_id')->unsigned();
            $table->integer('categories_id')->unsigned();
            $table->timestamps();

            $table->foreign('parish_areas_id')->references('id')->on('parish_areas')->onDelete('cascade');
            $table->foreign('municipalities_id')->references('id')->on('municipalities')->onDelete('cascade');
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('churches');
    }
}
