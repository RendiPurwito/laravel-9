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
        Schema::create('perpustakaans', function (Blueprint $table) {
            $table->id();
            $table->string('namabuku');
            $table->enum('jenisbuku', ['Romance', 'Horor', 'Sci-Fi', 'Novel', 'History', 'Bisnis and economy', 'Comic']);
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('tahunterbit');
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
        Schema::dropIfExists('perpustakaans');
    }
};
