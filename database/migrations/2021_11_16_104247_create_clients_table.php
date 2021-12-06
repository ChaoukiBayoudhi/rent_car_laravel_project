<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email', 30)->nullable();
            $table->string('CIN', 8);
            $table->date('bithday');
            
            //specification de la clé étrangère
            $table->unsignedBigInteger('address_id');
            $table->index('address_id');
             $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->timestamps();
            });
        //    Schema::table('clients', function (Blueprint $table) {
        //     $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
