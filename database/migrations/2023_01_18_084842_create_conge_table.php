<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conge', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employe_id');
            
            $table->unsignedBigInteger('type_conge_id');
            $table->foreign('type_conge_id')->references('id')->on('type_conge'); 
            $table->foreign('employe_id')->references('id')->on('employe'); 
            $table->date('date_dubet');
            $table->date('date_fin');
            $table->integer('jours');
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
        Schema::dropIfExists('conge');
    }
}
