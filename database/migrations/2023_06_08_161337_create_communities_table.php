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
        Schema::create('communities', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('coordinadores_id')->unsigned();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('last_name')->NULL;
            $table->string('password');
            $table->rememberToken();
            $table->foreign('coordinadores_id')->references('id')->on('coordinadores')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communities');
    }
};
