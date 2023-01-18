<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depenses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Reglement_id');
            $table->foreign('Reglement_id')->references('id')->on('Reglements');
            $table->unsignedBigInteger('Facture_id');
            $table->foreign('Facture_id')->references('id')->on('Factures');  
            $table->integer('numero');
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
        Schema::dropIfExists('depenses');
    }
}
