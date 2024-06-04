<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian_barangs', function (Blueprint $table) {
            
            $table->id('ID');
            $table->string('nomor_pembelian');
            $table->date('tanggal');
            $table->string('kode_barang');
            $table->string('satuan');
            $table->decimal('qty');
            $table->decimal('harga');
            $table->decimal('diskon');
            $table->decimal('subtotal');
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
        Schema::dropIfExists('pembelian_barangs');
    }
}
