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
        Schema::create('level_user', function (Blueprint $table) {
            $table->engine = 'innodb';
            // $table->char('id_level', 3)->primary();
            $table->char('id_level', 3)->primary();
            $table->string('nama', 255);
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('level_user');
    }
};
