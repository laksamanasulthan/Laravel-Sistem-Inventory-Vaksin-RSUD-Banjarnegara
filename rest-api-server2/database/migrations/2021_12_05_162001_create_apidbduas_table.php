<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApidbduasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apidbduas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namavaksin');
            $table->string('distributor');
            $table->string('targetpasien');
            $table->string('stokpembelian');
            $table->string('petunjuk');
            $table->string('biayapengadaan');
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
        Schema::dropIfExists('apidbduas');
    }
}
