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
        Schema::create('kutyak', function (Blueprint $table) {
            $table->id();
            $table->string("nev", 50);
            $table->integer('eletkor');
            $table->string('fajta', 50);
            $table->string('gazda_neve', 50);
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
        Schema::dropIfExists('kutyak');
    }
};
