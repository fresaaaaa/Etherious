<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->unique();
            $table->string('status');
            $table->date('tanggal_tayang');
            $table->string('studio');
            $table->string('musim');
            $table->string('genre');
            $table->integer('jumlah_tayang');
            $table->string('tipe_anime');
            $table->integer('rating');
            $table->integer('jumlah_episode');
            $table->string('sinopsis');
            $table->string('link_anime_list');
            $table->string('link_lagu');
            $table->string('link_lagu_2');
            $table->string('link_nonton_1');
            $table->string('link_nonton_2');
            $table->string('link_nonton_3');
            $table->string('link_nonton_4');
            $table->string('link_nonton_5');
            $table->string('link_nonton_6');
            $table->string('link_nonton_7');
            $table->string('link_nonton_8');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animes');
    }
}
