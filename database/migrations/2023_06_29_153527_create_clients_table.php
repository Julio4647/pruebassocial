<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('communitys_id')->unsigned();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('correo');

            $table->date('fecha_inicio');
            $table->date('fecha_vencimiento');
            $table->date('fecha_pago');


            $table->timestamps();
            $table->foreign('communitys_id')->references('id')->on('communitys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
