<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fornisseur_id');
            $table->foreign('fornisseur_id')->references('id')->on('fornisseurs'); 
            $table->unsignedBigInteger('typefacture_id');
            $table->foreign('typefacture_id')->references('id')->on('type__factures'); 
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
        Schema::dropIfExists('factures');
    }
}
