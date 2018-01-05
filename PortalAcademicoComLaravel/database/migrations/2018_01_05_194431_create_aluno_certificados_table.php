<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_certificados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aluno_id')->index('aluno_id');
			      $table->integer('curso_id')->index('curso_id');
			      $table->date('datamatricula');
			      $table->date('cadaconclusao');
			      $table->float('nota', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno_certificados');
    }
}
