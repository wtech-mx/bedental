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
        Schema::create('antecedentes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')
            ->references('id')->on('clients')
            ->inDelete('set null');

            $table->string('antecedente1', 15)->nullable();
            $table->string('tratamiento1')->nullable();
            $table->string('tiempo1', 50)->nullable();
            $table->string('parentesco1')->nullable();
            $table->string('antecedente2', 15)->nullable();
            $table->string('tratamiento2')->nullable();
            $table->string('tiempo2', 50)->nullable();
            $table->string('parentesco2')->nullable();
            $table->string('antecedente3', 15)->nullable();
            $table->string('tratamiento3')->nullable();
            $table->string('tiempo3', 50)->nullable();
            $table->string('parentesco3')->nullable();
            $table->string('antecedente4', 15)->nullable();
            $table->string('tratamiento4')->nullable();
            $table->string('tiempo4', 50)->nullable();
            $table->string('parentesco4')->nullable();
            $table->string('antecedente5', 15)->nullable();
            $table->string('tratamiento5')->nullable();
            $table->string('tiempo5', 50)->nullable();
            $table->string('parentesco5')->nullable();
            $table->string('antecedente6', 15)->nullable();
            $table->string('tratamiento6')->nullable();
            $table->string('tiempo6', 50)->nullable();
            $table->string('parentesco6')->nullable();
            $table->string('antecedente7', 15)->nullable();
            $table->string('tratamiento7')->nullable();
            $table->string('tiempo7', 50)->nullable();
            $table->string('parentesco7')->nullable();
            $table->string('antecedente8', 15)->nullable();
            $table->string('tratamiento8')->nullable();
            $table->string('tiempo8', 50)->nullable();
            $table->string('parentesco8')->nullable();
            $table->string('antecedente9', 15)->nullable();
            $table->string('tratamiento9')->nullable();
            $table->string('tiempo9', 50)->nullable();
            $table->string('parentesco9')->nullable();
            $table->string('antecedente10', 15)->nullable();
            $table->string('tratamiento10')->nullable();
            $table->string('tiempo10', 50)->nullable();
            $table->string('parentesco10')->nullable();
            $table->string('antecedente11', 15)->nullable();
            $table->string('tratamiento11')->nullable();
            $table->string('tiempo11', 50)->nullable();
            $table->string('parentesco11')->nullable();
            $table->string('antecedente12', 15)->nullable();
            $table->string('tratamiento12')->nullable();
            $table->string('tiempo12', 50)->nullable();
            $table->string('parentesco12')->nullable();
            $table->string('antecedente13', 15)->nullable();
            $table->string('tratamiento13')->nullable();
            $table->string('tiempo13', 50)->nullable();
            $table->string('parentesco13')->nullable();
            $table->string('antecedente14', 15)->nullable();
            $table->string('tratamiento14')->nullable();
            $table->string('tiempo14', 50)->nullable();
            $table->string('parentesco14')->nullable();
            $table->string('antecedente15', 15)->nullable();
            $table->string('tratamiento15')->nullable();
            $table->string('tiempo15', 50)->nullable();
            $table->string('parentesco15')->nullable();
            $table->string('antecedente16', 15)->nullable();
            $table->string('tratamiento16')->nullable();
            $table->string('tiempo16', 50)->nullable();
            $table->string('parentesco16')->nullable();
            $table->string('antecedente17', 15)->nullable();
            $table->string('tratamiento17')->nullable();
            $table->string('tiempo17', 50)->nullable();
            $table->string('parentesco17')->nullable();
            $table->string('antecedente18', 15)->nullable();
            $table->string('tratamiento18')->nullable();
            $table->string('tiempo18', 50)->nullable();
            $table->string('parentesco18')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antecedentes');
    }
};
