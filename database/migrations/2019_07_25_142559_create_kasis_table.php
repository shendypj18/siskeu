<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasis', function (Blueprint $table) {
            $table->bigIncrements('id_kasi');
            $table->string('nama_kasi');
            $table->char('nip_kasi',20)->unique();
            $table->string('email_kasi');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kasis');
    }
}
