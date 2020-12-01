<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigInteger('idPackages')->primary();
            $table->string('Cities');
            //$table->foreign('Cities')->references('idCities')->on('cities');
            $table->bigInteger('Things')->unsigned();
            //$table->foreign('Things')->references('idThings')->on('thingstodos');
            $table->string('name');
            $table->bigInteger('budget');
            $table->string('days');
            $table->string('transportation');
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
        Schema::dropIfExists('packages');
    }
}
