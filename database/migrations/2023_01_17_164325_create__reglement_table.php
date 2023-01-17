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
        Schema::create('_reglement', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_cheque')->references('id')->on('Cheque');
            $table->date('date');
            $table->string('methode');
            $table->float('montant');
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
        Schema::dropIfExists('_reglement');
    }
}
