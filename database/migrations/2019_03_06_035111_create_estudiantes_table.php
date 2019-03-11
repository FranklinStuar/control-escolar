<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('nacimiento');
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('representante_id');
            $table->unsignedBigInteger('curso_id');
            $table->timestamps();
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('representante_id')->references('id')->on('representantes')->onDelete('cascade');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estudiantes', function (Blueprint $table) {
            $table->dropForeign(['representante_id']);
            $table->dropForeign(['curso_id']);
            $table->dropForeign(['persona_id']);
        });
        Schema::dropIfExists('estudiantes');
    }
}
