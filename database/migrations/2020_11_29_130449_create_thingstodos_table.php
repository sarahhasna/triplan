<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThingstodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thingstodos', function (Blueprint $table) {
            $table->bigInteger('idThings')->primary();
            $table->bigInteger('Cities')->unsigned();
            $table->bigInteger('Packages')->unsigned();
            $table->string('name');
            $table->longtext('desc');
            $table->string('operational_time');
            $table->bigInteger('price');
            //$table->foreign('Cities')->references('idCities')->on('cities');
            //$table->foreign('Packages')->references('idPackages')->on('thingstodos');
            //$table->binary('image');
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
        Schema::dropIfExists('thingstodos');
    }
}
