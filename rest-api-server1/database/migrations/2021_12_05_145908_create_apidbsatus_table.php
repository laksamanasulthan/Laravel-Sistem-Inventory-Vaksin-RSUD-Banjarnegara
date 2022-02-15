<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApidbsatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apidbsatus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pengembangvaksin');
            $table->string('approval');
            $table->string('clinicalprtg');
            $table->string('dosis');
            $table->string('rekomendasi');
            $table->string('efeksamping');
            $table->string('peringatan');
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
        Schema::dropIfExists('apidbsatus');
    }
}
