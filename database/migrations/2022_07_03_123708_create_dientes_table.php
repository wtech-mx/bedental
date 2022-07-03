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
        Schema::create('dientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_odontograma');
            $table->foreign('id_odontograma')
                ->references('id')->on('odontograma')
                ->inDelete('set null');

            $table->integer('diente');
            $table->boolean('lado1')->nullable();
            $table->boolean('lado2')->nullable();
            $table->boolean('lado3')->nullable();
            $table->boolean('lado4')->nullable();
            $table->boolean('lado5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dientes');
    }
};
