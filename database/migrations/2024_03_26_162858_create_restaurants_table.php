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
        //creazione tabella restaurants con le relative colonne 
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name', 256);
            $table->string('slug', 256);
            $table->string('address', 256);
            $table->unsignedBigInteger('iva')->unique(); //da verificare lunghezza (11)
            $table->string('img',256);
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
        Schema::dropIfExists('restaurants');
    }
};
