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
        Schema::create('absents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_murid');
            $table->time('jam_datang');
            $table->time('jam_pulang');
            $table->enum('status', ['hadir', 'sakit', 'izin']);
            $table->enum('keterangan', ['tepat waktu' , 'terlambat']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absents');
    }
};
