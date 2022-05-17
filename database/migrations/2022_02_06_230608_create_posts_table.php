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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('body');
            $table->string('category_id')->nullable();
            $table->string('parent_id')->nullable();
            // $table->unsignedBigInteger('category_id');
            // $table->unsignedBigInteger('')->nullable();

            // $table->foreign('category_id')->references('id')->on('categories');
            // $table->foreign('sub_parent')->references('parent_id')->on('categories');
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
