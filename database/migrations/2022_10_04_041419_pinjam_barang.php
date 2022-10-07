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
        Schema::create('pinjam_barang', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->char('id_pinjam', 11)->primary();
            $table->char('peminjam', 8);
            $table->date('tgl_pinjam');
            $table->char('barang_pinjam', 8);

            $table->integer('jml_pinjam');
            $table->date('tgl_kembali');
            $table->string('kondisi', 255);

            // foreign
            $table
                ->foreign('peminjam')
                ->references('id_user')
                ->on('user')
                ->cascadeOnDelete();

            $table
                ->foreign('barang_pinjam')
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
        Schema::dropIfExists('pinjam_barang');
    }
};
