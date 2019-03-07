<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('asumto')->nullable();
            $table->text('mensaje');
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
        Schema::table('notificacions', function (Blueprint $table) {
            $table->dropForeign(['representante_id']);
        });
        Schema::dropIfExists('notificacions');
    }
}
