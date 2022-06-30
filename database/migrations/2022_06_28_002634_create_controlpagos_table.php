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
        Schema::create('controlpagos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_clients');
            $table->foreign('id_clients')
                ->references('id')->on('clients')
                ->inDelete('set null');

            $table->unsignedBigInteger('id_color');
            $table->foreign('id_color')
                ->references('id')->on('colores')
                ->inDelete('set null');

            $table->unsignedBigInteger('id_alertas');
            $table->foreign('id_alertas')
                ->references('id')->on('alertas')
                ->inDelete('set null');

            $table->unsignedBigInteger('id_doctor');
            $table->foreign('id_doctor')
                ->references('id')->on('especialists')
                ->inDelete('set null');

            $table->string('fecha')->nullable();
            $table->string('tratamiento')->nullable();

            $table->integer('costo_total')->nullable();
            $table->integer('pagado')->nullable();
            $table->integer('saldo_pendiente')->nullable();

            $table->string('firma_doctor')->nullable();
            $table->string('firma_paciente')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('controlpagos');
    }
};
