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
        Schema::create('klub', function (Blueprint $table) {
            $table->id();
            $table->string('nama_klub');
            $table->string('kota_klub');
            $table->tinyInteger('main')->default(0);
            $table->tinyInteger('menang')->default(0);
            $table->tinyInteger('seri')->default(0);
            $table->tinyInteger('kalah')->default(0);
            $table->tinyInteger('gm')->default(0);
            $table->tinyInteger('gk')->default(0);
            $table->tinyInteger('poin')->default(0);
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
        Schema::dropIfExists('klub');
    }
};
