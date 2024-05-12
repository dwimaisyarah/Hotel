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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengunjung');
            $table->integer('jumlah_pembayan');
            $table->unsignedBigInteger('pengunjung_id');
            $table->foreign('pengunjung_id')->references('id')->on('pengunjung');
            $table->unsignedBigInteger('resepsionis_id');
            $table->foreign('resepsionis_id')->references('id')->on('resepsionis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
