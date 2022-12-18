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
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('summary');
            $table->longText('description')->nullable();
            $table->text('quote')->nullable();
            $table->string('photo')->nullable();
            $table->string('tags')->nullable();
            $table->unsignedBigInteger('post_cat_id')->unsigned()->nullable();
            $table->unsignedBigInteger('post_tag_id')->unsigned()->nullable();
            $table->unsignedBigInteger('user_id');
            $table->enum('status',['active','inactive'])->default('active');
            $table->foreign('post_cat_id')->references('id')->on('post_categories')->onDelete('SET NULL');
            $table->foreign('post_tag_id')->references('id')->on('post_tags')->onDelete('SET NULL');

            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
