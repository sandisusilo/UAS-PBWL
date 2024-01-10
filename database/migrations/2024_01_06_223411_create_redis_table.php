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
        Schema::create('redis', function (Blueprint $table) {
            $table->increments('r_id');
            $table->Integer('id_p')->unsigned();
            $table->Integer('r_id_o')->unsigned();
            $table->foreign('id_p')->references('id')->on('pasiens')->onDelete('cascade');
            $table->foreign('r_id_o')->references('o_id')->on('obats')->onDelete('cascade');
            $table->date('tgl_periksa');
            $table->string('keluhan');
            $table->string('tindakan');
            $table->string('diagnosa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('redis');
    }
};
