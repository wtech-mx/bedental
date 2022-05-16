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
            $table->string('varicela', 10);
            $table->string('sarampion', 10);
            $table->string('rubeola', 10);
            $table->string('escarlatina', 10);

            $table->string('vih', 10);
            $table->string('hepatitis', 10);
            $table->string('vph', 10);
            $table->string('otras_tran', 10);

            $table->string('covid', 10);
            $table->string('influenza', 10);
            $table->string('epoc', 10);
            $table->string('asma', 10);
            $table->string('otras_res', 10);

            $table->string('medicamentos', 100);

            for($i=1; $i<=13; $i++){
                $table->string('pregunta'.$i, 100);
            }

            for($i=1; $i<=10; $i++){
                $table->string('descripcion'.$i);
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
