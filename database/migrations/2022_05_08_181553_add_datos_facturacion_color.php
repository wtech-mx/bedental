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
        Schema::table('especialists', function (Blueprint $table) {
            $table->string('color');
            $table->string('domicilio_fiscal');
            $table->string('regimen_fiscal');
            $table->string('rfc');
            $table->string('razon_social');
            $table->string('correo_fiscal');
            $table->string('cfdi');
            $table->string('seguro');
            $table->string('poliza');
            $table->string('empresa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('especialists', function (Blueprint $table) {
            //
        });
    }
};
