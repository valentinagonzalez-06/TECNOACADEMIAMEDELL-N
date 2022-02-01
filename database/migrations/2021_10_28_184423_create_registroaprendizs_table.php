<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateregistroaprendizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registroaprendizs', function (Blueprint $table) {
            $table->id();
            $table->string('tipodoc')->nullable();
            $table->string('numiden')->unique();
            $table->string('depaexp')->nullable();
            $table->string('munexp')->nullable();
            $table->date('fechaexp')->nullable();
            $table->date('fechaven');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('depanacim')->nullable();
            $table->string('municipionac')->nullable();
            $table->date('nacimiento');
            $table->string('genero');
            $table->string('estrato')->nullable();
            $table->string('grupoetnico')->nullable();
            $table->string('discapacidad')->nullable();
            $table->string('pbvulnerable')->nullable();
            $table->string('eps')->nullable();
            $table->string('tiposanguineo');
            $table->string('email');
            $table->string('cel');
            $table->string('direccion');
            $table->string('telfijo');
            $table->string('nombreapell');
            $table->string('numeroCedula');
            $table->string('correo');
            $table->string('celularacud');
            $table->string('institucionedu');
            $table->string('grado')->nullable();
            $table->string('facilitador');
            $table->string('subarea');
            $table->string('periodicidad');
            $table->string('tipoinfo');
            $table->string('foto');
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
        Schema::dropIfExists('registroaprendizs');
    }
}
