<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReglementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reglement', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cheque_id');
            $table->date('date');
            $table->string('methode');
            $table->float('montant');
            $table->foreign('cheque_id')->references('id')->on('cheque');
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
        Schema::dropIfExists('reglement');
    }
}
