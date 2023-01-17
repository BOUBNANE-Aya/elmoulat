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
        Schema::create('_relever_bancaire', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_bank')->references('id')->on('Bank');
            $table->foreign('id_cheque')->references('id')->on('Cheque');
            $table->date('date');
            $table->string('operation_ref');
            $table->float('debit');
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
        Schema::dropIfExists('_relever_bancaire');
    }
}
