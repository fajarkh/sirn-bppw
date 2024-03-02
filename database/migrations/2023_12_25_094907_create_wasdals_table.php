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
        Schema::create('wasdals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penghuni_id')->nullable();
            $table->foreign('penghuni_id')->references('id')->on('penghunis');

            $table->string('hdno');
            $table->string('thn_bangunan')->nullable();
            $table->string('kontruksi')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kecamatan')->nullable();

            $table->string('no_sk')->nullable();
            $table->date('tgl_sk')->nullable();
            $table->string('no_sip')->nullable();
            $table->date('tgl_sip')->nullable();
            $table->string('no_sk_penjualan')->nullable();
            $table->date('tgl_sk_penjualan')->nullable();
            $table->string('no_psb')->nullable();
            $table->date('tgl_psb')->nullable();

            $table->string('sktl_sewa')->nullable();
            $table->date('tgl_sktl_sewa')->nullable();
            $table->string('sktl_sb')->nullable();
            $table->date('tgl_sktl_sb')->nullable();
            $table->string('phm')->nullable();
            $table->date('tgl_phm')->nullable();

            $table->string('status_penghuni')->nullable();
            $table->string('ket_status')->nullable();

            $table->date('mulai')->nullable();
            $table->date('jatuh_tempo')->nullable();

            $table->string('tipe_rumah')->nullable();
            $table->string('fungsi_rumah')->nullable();
            $table->string('bentuk_rumah')->nullable();
            $table->string('luas_rumah1')->nullable();
            $table->string('luas_rumah2')->nullable();
            $table->string('luas_tanah1')->nullable();
            $table->string('luas_tanah2')->nullable();

            $table->string('latitude')->nullable();
            $table->string('longtitude')->nullable();

            $table->integer('harga_rumah')->default(0)->nullable();
            $table->integer('harga_tanah')->default(0)->nullable();
            $table->integer('uang_muka')->default(0)->nullable();
            $table->integer('angsuran_bulanan')->default(0)->nullable();
            $table->integer('angsuran_terakhir')->default(0)->nullable();
            $table->integer('angsuran_terbayar')->default(0)->nullable();
            $table->integer('sisa_angsuran')->default(0)->nullable();

            $table->string('utara')->nullable();
            $table->string('selatan')->nullable();
            $table->string('timur')->nullable();
            $table->string('barat')->nullable();
            $table->string('catatan')->nullable();

            $table->text('situasi')->nullable();
            $table->text('siteplan')->nullable();
            $table->text('foto_lingkungan1')->nullable();
            $table->text('foto_lingkungan2')->nullable();
            $table->text('foto_rumah1')->nullable();
            $table->text('foto_rumah2')->nullable();
            $table->text('foto_rumah3')->nullable();
            $table->text('foto_rumah4')->nullable();
            $table->text('foto_5')->nullable();
            $table->text('foto_pembayaran_akhir')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wasdals');
    }
};
