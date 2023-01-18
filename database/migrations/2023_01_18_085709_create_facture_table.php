<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fornisseur_id');
            $table->foreign('fornisseur_id')->references('id')->on('fornisseur'); 
            $table->unsignedBigInteger('type_facture_id');
            $table->foreign('type_facture_id')->references('id')->on('type_facture'); 
            $table->integer('numero');
            $table->date('date');
            $table->string('scan_pdf');
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
        Schema::dropIfExists('facture');
    }
}
