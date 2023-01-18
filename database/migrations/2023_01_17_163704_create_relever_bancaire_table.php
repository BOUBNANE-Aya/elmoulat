<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReleverBancaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relever_bancaire', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('compte_id');
            $table->date('date');
            $table->string('operation_ref');
            $table->float('debit');
            $table->foreign('compte_id')->references('id')->on('compte');
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
        Schema::dropIfExists('relever_bancaire');
    }
}
