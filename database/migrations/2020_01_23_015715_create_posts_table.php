<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newSiswa', function (Blueprint $table) {
            $table->string('Nama');
            $table->string('nis');
            $table->string('Jenis_kelamin');
            $table->text('Alamat');
            $table->date('Tanggal_Lahir');
            $table->integer('umur');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newSiswa');
    }
}
