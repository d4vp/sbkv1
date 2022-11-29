<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadoproductos', function (Blueprint $table) {
            $table->id();
            $table->string('precio');
            $table->unsignedBigInteger('producto_id')->unique();
            $table->foreign('producto_id')->references('id')->on('productos');
           
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
        Schema::dropIfExists('estadoproductos');
    }
}
