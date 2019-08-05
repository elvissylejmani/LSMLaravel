<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShtepiaBotuesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shtepia_botueses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ShtepiaBotuese_Emri');
            $table->string('ShtepiaBotuese_Qyteti')->nullable();
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
        Schema::dropIfExists('shtepia_botueses');
    }
}
