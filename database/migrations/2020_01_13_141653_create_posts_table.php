<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('Region');
          $table->string('Classification');
          $table->string('Distinction');
          $table->string('Mainnumber');
          $table->string('Bland');
          $table->string('Color');
          $table->string('Prefecture_city')->default(0);
          $table->string('bodytype');
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
        Schema::dropIfExists('posts');
    }
}
