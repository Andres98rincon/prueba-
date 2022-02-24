<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name',144)->comment('nombre de la mascota');
            $table->unsignedBigInteger('species_id')->comment('especie de la mascota');
            $table->dateTime('born_date')->comment('fecha de nacimiento de la mascota');
            $table->string('human_name',111)->comment('nombre del dueño');
            $table->text('description',512)->comment('descripcion de la mascota');
            $table->string('Photo')->comment('foto de la mascota');
            $table->timestamps();

            $table->foreign('species_id')->references('id')->on('species');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
};
