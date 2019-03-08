<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('nota',5,2); //calificación
            $table->string('observacion')->nullable();  // en caso que quiera indicar algo sobre la nota del estudiante
            $table->unsignedBigInteger('grupo_nota_id');
            $table->unsignedBigInteger('estudiante_id');
            $table->date('fecha'); //Fecha en la que indica la nota del alumno
            $table->timestamps();//fecha en la que se registra la nota
            $table->foreign('grupo_nota_id')->references('id')->on('grupo_notas')->onDelete('cascade');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notas', function (Blueprint $table) {
            $table->dropForeign(['grupo_nota_id']);
            $table->dropForeign(['estudiante_id']);
        });
        Schema::dropIfExists('notas');
    }
}
