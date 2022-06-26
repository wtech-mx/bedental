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
        Schema::table('alertas', function (Blueprint $table) {
            $table->dropColumn('color');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->unsignedBigInteger('id_color');
            $table->foreign('id_color')
            ->references('id')->on('colores')
            ->inDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alertas', function (Blueprint $table) {
            //
        });
    }
};
