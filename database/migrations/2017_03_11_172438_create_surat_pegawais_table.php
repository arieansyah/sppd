<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratPegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_pegawais', function (Blueprint $table) {
            $table->integer('surat_id')->unsigned();
            $table->integer('pegawai_id')->unsigned();
            $table->timestamps();
            
            $table  ->foreign('surat_id')->references('id')->on('surats')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table  ->foreign('pegawai_id')->references('id')->on('pegawais')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_pegawais');
    }
}
