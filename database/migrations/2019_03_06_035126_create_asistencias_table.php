<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('asistencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('tipo',['T','A','Fj','Fi',])->default('Fi'); // T=tardanza, A=asistió, FJ= Falta justificada, Fi= Falta injustificada,
            $table->date('fecha'); 
            $table->string('observacion')->nullable(); 
            $table->unsignedBigInteger('estudiante_id');
            $table->timestamps();
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
        Schema::table('asistencias', function (Blueprint $table) {
            $table->dropForeign(['estudiante_id']);
        });
        Schema::dropIfExists('asistencias');
    }
}
