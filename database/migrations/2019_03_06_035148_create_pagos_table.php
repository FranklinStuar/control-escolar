<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('monto',8,2); 
            $table->date('fecha'); //Fecha real, no la que se registra
            $table->unsignedBigInteger('representante_id');
            $table->timestamps();
            $table->foreign('representante_id')->references('id')->on('representantes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pagos', function (Blueprint $table) {
            $table->dropForeign(['representante_id']);
        });
        Schema::dropIfExists('pagos');
    }
}
