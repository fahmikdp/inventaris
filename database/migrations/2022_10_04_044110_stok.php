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
        Schema::create('stok', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->char('id_barang', 8)->primary();
            $table->integer('jml_masuk');
            $table->integer('jml_keluar');

            // foreign
            $table
                ->foreign('id_barang')
                ->references('id_barang')
                ->on('barang')
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
    }
};
