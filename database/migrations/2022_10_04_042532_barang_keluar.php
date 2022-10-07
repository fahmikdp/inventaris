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
        //
        Schema::create('barang_keluar', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->char('id_barang', 8);
            $table->date('tgl_keluar');
            $table->integer('jml_keluar');
            $table->char('supplier', 8);

            // foreign
            $table
                ->foreign('supplier')
                ->references('id_supplier')
                ->on('suppliers')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('barang_keluar');
    }
};
