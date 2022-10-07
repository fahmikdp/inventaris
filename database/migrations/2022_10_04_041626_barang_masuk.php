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
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->char('id_barang', 8);
            $table->date('tgl_masuk');
            $table->integer('jml_masuk');
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
        Schema::dropIfExists('barang_masuk');
    }
};
