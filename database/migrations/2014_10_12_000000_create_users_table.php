<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Emri');
            $table->string('Mbiemri');
            $table->unsignedInteger('NrPersonal');
            $table->unsignedInteger('NrIdentifikues')->nullable();
            $table->date('DataELindjes')->nullable();
            $table->unsignedInteger('ID_Roli')->default(1);
            $table->string('Librat')->nullable();
            $table->string('Email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
