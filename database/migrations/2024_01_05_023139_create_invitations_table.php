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
        Schema::create('invitations', function (Blueprint $table) {
            $table->increments("id");
            $table->string("slug")->unique();
            $table->string("nama_pria");
            $table->string("nama_wanita");
            $table->text("alamat");
            $table->date("tanggal");
            $table->time("waktu_mulai");
            $table->time("waktu_selesai");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
