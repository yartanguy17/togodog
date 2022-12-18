<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('categories', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->text('summary')->nullable();
      $table->unsignedBigInteger('added_by');
      $table->enum('status', ['active', 'inactive'])->default('inactive');
      $table->timestamps();
    });

    Schema::table('categories', function(Blueprint $table){
      $table->foreign('added_by')
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
    Schema::dropIfExists('categories');
  }
}
