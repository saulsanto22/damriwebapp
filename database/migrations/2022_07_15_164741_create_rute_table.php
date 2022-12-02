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
        Schema::create('rute', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jurusan', 100);
            $table->string('rute_pergi', 100);
            $table->string('rute_pulang', 100);
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
        Schema::dropIfExists('rute');
        // rute -> jurusan , rute
        //jadwal -> operasi awal , akhir
        //tarif -> tarif
        // nama jurusan -> rute pergi & pulang-> jadwal -> tarif
    }
};
