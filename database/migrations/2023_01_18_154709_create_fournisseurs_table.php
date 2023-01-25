<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fdomaine_id');
            $table-> string('nom');
            $table-> integer('ice');
            $table-> integer('phone');
            $table-> string('email');
            $table-> string('adress');
            $table->foreign('fdomaine_id')->references('id')->on('f_domaines');  
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
        Schema::dropIfExists('fournisseurs');
    }
}
