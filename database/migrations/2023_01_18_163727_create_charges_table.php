<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fornisseur_id');
            $table->foreign('fornisseur_id')->references('id')->on('fornisseurs'); 
            $table->unsignedBigInteger('projet_id');
            $table->foreign('projet_id')->references('id')->on('projets'); 
            $table->unsignedBigInteger('ouvrier_id');
            $table->foreign('ouvrier_id')->references('id')->on('ouvriers'); 
            $table->unsignedBigInteger('Reglement_id');
            $table->foreign('Reglement_id')->references('id')->on('Reglements'); 
            $table->unsignedBigInteger('facture_id');
            $table->foreign('facture_id')->references('id')->on('factures'); 
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
        Schema::dropIfExists('charges');
    }
}
