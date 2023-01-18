<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornisseurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornisseur', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fdomaine_id');
            $table-> string('nom');
            $table-> integer('ice');
            $table-> integer('phone');
            $table-> string('email');
            $table->foreign('fdomaine_id')->references('id')->on('fdomaine');  
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
        Schema::dropIfExists('fornisseur');
    }
}
