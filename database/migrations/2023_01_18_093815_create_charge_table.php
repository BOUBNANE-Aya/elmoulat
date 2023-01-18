<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChargeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charge', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fornisseur_id');
            $table->foreign('fornisseur_id')->references('id')->on('fornisseur'); 
            $table->unsignedBigInteger('projet_id');
            $table->foreign('projet_id')->references('id')->on('projet'); 
            $table->unsignedBigInteger('ouvrier_id');
            $table->foreign('ouvrier_id')->references('id')->on('ouvrier'); 
            $table->unsignedBigInteger('Reglement_id');
            $table->foreign('Reglement_id')->references('id')->on('Reglement'); 
            $table->unsignedBigInteger('facture_id');
            $table->foreign('facture_id')->references('id')->on('facture'); 
            $table->string('name');
            $table->string('type');
            $table->string('bon');
            $table->float('prix');
            $table->float('Tva');
            $table->float('QT');
            $table->float('prix_TTC');
            $table->float('MTTTC');
            $table->enum('situation',['payed','notPayed'])->default('notPayed');
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
        Schema::dropIfExists('charge');
    }
}
