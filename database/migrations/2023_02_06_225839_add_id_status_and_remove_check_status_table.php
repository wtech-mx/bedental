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
            $table->dropForeign('FK_alertas_colores');
            $table->dropColumn("id_color");

            $table->unsignedBigInteger('id_status');
            $table->foreign('id_status')
                ->references('id')->on('status')
                ->inDelete('set null');

            $table->dropColumn("check");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
};
