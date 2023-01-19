<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOuvriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ouvriers', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->date('dateNais');
            $table->string('cin');
            $table->string('N_CIN');
            $table->date('date-dube');
            $table->string('observation');
            $table->integer('notation');
            
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
        Schema::dropIfExists('ouvriers');
    }
}
