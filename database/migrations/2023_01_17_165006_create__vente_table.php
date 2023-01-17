<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_vente', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_projet')->references('id')->on('Project');
            $table->foreign('id_client')->references('id')->on('Client');
            $table->string('titre');
            $table->float('montant');
            $table->float('montantReal');
            $table->string('contart');

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
        Schema::dropIfExists('_vente');
    }
}
