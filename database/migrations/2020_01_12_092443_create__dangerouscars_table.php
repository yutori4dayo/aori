<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDangerouscarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_dangerouscars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Region');
            $table->string('Classification');
            $table->string('Distinction');
            $table->string('Mainnumber');
            $table->string('Bland');
            $table->string('Color');
            $table->string('Prefecture_city');
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
        Schema::dropIfExists('_dangerouscars');
    }
}
