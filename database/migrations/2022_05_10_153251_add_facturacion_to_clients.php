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
        Schema::table('clients', function (Blueprint $table) {
            $table->string('domicilio_fiscal')->nullable();
            $table->string('regimen_fiscal')->nullable();
            $table->string('rfc')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('correo_fiscal')->nullable();
            $table->string('cfdi')->nullable();
            $table->string('seguro')->nullable();
            $table->string('poliza')->nullable();
            $table->string('empresa')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            //
        });
    }
};
