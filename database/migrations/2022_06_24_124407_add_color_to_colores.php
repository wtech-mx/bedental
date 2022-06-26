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
        Schema::table('colores', function (Blueprint $table) {
            $table->dropColumn('limpieza');
            $table->dropColumn('operatoria');
            $table->dropColumn('ortodoncia');
            $table->dropColumn('cirugia_extraccion');
            $table->dropColumn('retenedores');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');

            $table->string('servicio')->nullable();
            $table->string('color')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('colores', function (Blueprint $table) {
            //
        });
    }
};
