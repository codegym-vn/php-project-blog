<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('desc');
            $table->text('content');
            $table->longText('image');
            $table->string('id_user')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
