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
        Schema::create('plan_tratamiento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_odontograma');
            $table->foreign('id_odontograma')
                ->references('id')->on('odontograma')
                ->inDelete('set null');

            $table->integer('od');
            $table->string('diagnostico');
            $table->string('tratamiento');
            $table->integer('costo');
            $table->string('estatus');
            $table->date('fecha')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_tratamiento');
    }
};
