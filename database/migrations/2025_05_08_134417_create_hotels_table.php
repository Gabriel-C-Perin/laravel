<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateHotelsTable extends Migration
{
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cidade');
            $table->string('pais');
            $table->integer('estrelas');
            $table->decimal('diaria', 8, 2);
            $table->text('comodidades')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}