<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatecontratCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrat_cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_id');
            $table->index('car_id');
            $table->foreign('car_id')->references('id')
                                ->on('cars')
                                ->onDelete('cascade');
            $table->unsignedBigInteger('contrat_id');
            $table->index('contrat_id');
            $table->foreign('contrat_id')->references('id')
                                ->on('contrats')
                                ->onDelete('cascade');
                                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrat_cars');
    }
}
