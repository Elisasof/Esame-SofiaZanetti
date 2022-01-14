<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerrenisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terrenis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->testo('comune')->nullable;
            $table->string('foto')->nullable;
            $table->float('dimensione')->nullable;
            $table->string('fogliocatasto')->nullable;
            $table->string('mappacatasto')->nullable;
            $table->string('parcellacatasto')->nullable;
            $table->string('terreno')->nullable;
            $table->string('irrigazione')->nullable;
            $table->float('offerta')->nullable;
            $table->string('canoneofferta')->nullable;
            $table->boolean('disponibilita')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terrenis');
    }
}
