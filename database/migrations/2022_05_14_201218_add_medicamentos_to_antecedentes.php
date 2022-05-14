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
        Schema::table('antecedentes', function (Blueprint $table) {
            $table->string('domicilio_fiscal');
            for($i=1; $i<=14; $i++){
                $table->string('pregunta'.'.$i.');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('antecedentes', function (Blueprint $table) {
            //
        });
    }
};
