<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtencionmedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atencionmedicas', function (Blueprint $table) {
            $table->id();
            $table->longText('sintomas_paciente');
            $table->longText('diagnostico_paciente');
            $table->longText('tratamiento_paciente');
            $table->longText('recomendacion_medico');
            $table->boolean('requiere_autorizacion');
            $table->string('numero_autorizacion');
            //
            $table->unsignedBigInteger('id_historiaclinica');
            $table->foreign('id_historiaclinica')->references('id')->on('historiaclinicas');


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
        Schema::dropIfExists('atencionmedicas');
    }
}
