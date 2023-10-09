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
        Schema::table('koleksi', function (Blueprint $table) {
            // $table->id();
            // $table->string('namaKoleksi');
            // $table->tinyInteger('jenisKoleksi');
            // $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            // $table->integer('jumlahKoleksi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('koleksi');
    }
};
