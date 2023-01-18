<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bureau_id');
            $table->foreign('bureau_id')->references('id')->on('bureau'); 
            $table->string('nom');
            $table->string('prenom');
            $table->integer('phone');
            $table->date('date_dubet');
            $table->string('contrat');
            $table->string('designation');
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
        Schema::dropIfExists('employe');
    }
}
