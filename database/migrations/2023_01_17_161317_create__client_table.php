<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_client', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('N_CIN');
            $table->integer('cin');
            $table->string('email');
            $table->string('phone');
            $table->string('ville_de_resi');

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
        Schema::dropIfExists('_client');
    }
}
