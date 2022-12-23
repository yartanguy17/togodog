<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAdmin extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('admins', function (Blueprint $table) {
      $table->id();
      $table->string('last_name')->nullable();
      $table->string('first_name')->nullable();
      $table->string('email')->unique();
      $table->string('phone_number')->unique();
      $table->string('address')->nullable();
      $table->string('profile_picture')->nullable();
      $table->string('email_verified_at')->nullable();
      $table->string('password');
      $table->boolean('is_actived');
      $table->string('remember_token')->nullable();
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
    Schema::dropIfExists('admins');;
  }
}
