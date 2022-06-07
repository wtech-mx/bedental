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
        Schema::create('radiograficos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_antecedente');
            $table->foreign('id_antecedente')
            ->references('id')->on('antecedentes')
            ->inDelete('set null');
            $table->string('name')->nullable();
            $table->string('date')->nullable();
            $table->string('file_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('radiograficos');
    }
};
