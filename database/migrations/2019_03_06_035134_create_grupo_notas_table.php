<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_notas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',50);  //nombre del grupo. Ej: prueba
            $table->string('observacion')->nullable();  //indica sobre que es la calificación
            $table->double('nota_limite',5,2)->default(10); //sobre cuanto va a ser la nota máxima. Ej: en prueba puede ser 10 en examen 20
            $table->double('nota_equivalente',5,2)->default(10); //sirve para hacer regla de 3, si prueba se califica sobre 
            $table->date('fecha'); //Fecha real a la que pertenece el grupo de notas
            $table->unsignedBigInteger('materia_id');
            $table->timestamps(); 
            $table->foreign('materia_id')->references('id')->on('materias')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grupo_notas', function (Blueprint $table) {
            $table->dropForeign(['materia_id']);
        });
        Schema::dropIfExists('grupo_notas');
    }
}
