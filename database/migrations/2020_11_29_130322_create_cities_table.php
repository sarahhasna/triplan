<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigInteger('idCities')->primary();
            $table->bigInteger('Packages')->unsigned();
            $table->bigInteger('Things')->unsigned();
            $table->string('city');
            $table->longtext('description');
            //$table->foreign('Packages')->references('idPackages')->on('packages');
            //$table->foreign('Things')->references('idThings')->on('thingstodos');
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
        Schema::dropIfExists('cities');
    }
}
