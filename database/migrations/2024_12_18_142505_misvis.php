<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Misvis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MisVis', function(Blueprint $table){
            $table->id();
            $table->text('name');
            $table->text('imagen');
            $table->enum('status',['ACTIVE','DEACTIVATE'])->default('ACTIVE');
            $table->timestamps();
           
            
            //$table->text('texto');
           // $table->text('url');
            //$table->enum('status',['ACTIVE','DESACTIVATE'])->default('ACTIVE');
            //$table->foreign('imagenes_id')->references('id')->on('imagenes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('misvis');
    }
}
