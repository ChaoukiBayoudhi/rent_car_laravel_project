<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            //$table->increment('id');//primary key auto-incremented comme identité de taille 10
            //et de type Integer
            $table->id();//crée une colonne de type unsigned BigInteger de taille 20, auo-inrémentée
            //commençant de 1 et de pas =1 (comme identité)
            $table->string('Number');
            $table->string('street');
            $table->string('state');
            $table->integer('postal_code');
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
        Schema::dropIfExists('addresses');
    }
}
