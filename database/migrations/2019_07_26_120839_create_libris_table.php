<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libris', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('NumriSerik');
            $table->binary('FotoLibrit');
            $table->unsignedInteger('ID_Zhanri');
            $table->string('Titulli');
            $table->string('Autori');
            $table->unsignedInteger('ID_ShtepiaBotuese');
            $table->unsignedInteger('NumriIFaqeve');
            $table->date('VitiIBotimit');
            $table->date('VitiIRibotimit')->nullable();
            $table->string('Vellimi')->nullable()->default('I');
            $table->unsignedInteger('ID_Rafti');
            $table->boolean('Statusi')->default(true);
            $table->unsignedInteger('NumriILexuesve');
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
        Schema::dropIfExists('libris');
    }
}
