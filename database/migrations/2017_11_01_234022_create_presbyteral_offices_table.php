<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresbyteralOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presbyteral_offices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prebyters_id')->unsigned();
            $table->integer('ecclesiastical_trades_id')->unsigned();
            $table->timestamps();

            $table->foreign('prebyters_id')->references('id')->on('prebyters')->onDelete('cascade');
            $table->foreign('ecclesiastical_trades_id')->references('id')->on('ecclesiastical_trades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presbyteral_offices');
    }
}
