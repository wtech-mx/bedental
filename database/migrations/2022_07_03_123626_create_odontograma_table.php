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
        Schema::create('odontograma', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_clients');
            $table->foreign('id_clients')
                ->references('id')->on('clients')
                ->inDelete('set null');

            $table->unsignedBigInteger('id_doctor');
            $table->foreign('id_doctor')
                ->references('id')->on('especialists')
                ->inDelete('set null');

            $table->boolean('estatus');
            $table->date('fecha');
            $table->string('observaciones')->nullable();
            $table->float('total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('odontograma');
    }
};
