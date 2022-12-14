<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('shippings', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('type');
      $table->decimal('price');
      $table->enum('status', ['active', 'inactive'])->default('active');
      $table->timestamps();
    });


    Schema::create('orders', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('order_number')->unique();
      $table->unsignedBigInteger('user_id');
      $table->float('sub_total');
      $table->unsignedBigInteger('shipping_id')->nullable();
      $table->float('coupon')->nullable();
      $table->float('total_amount');
      $table->integer('quantity');
      $table->enum('payment_method', ['flooz', 'tmoney', 'visa', 'paypal'])->default('visa');
      $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid');
      $table->enum('status', ['new', 'process', 'delivered', 'cancel'])->default('new');
      $table->foreign('shipping_id')->references('id')->on('shippings')->nullOnDelete();
      $table->string('first_name');
      $table->string('last_name');
      $table->string('email');
      $table->string('phone');
      $table->string('country');
      $table->string('post_code')->nullable();
      $table->text('address1');
      $table->text('address2')->nullable();
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
    Schema::dropIfExists('shippings');
    Schema::dropIfExists('orders');
  }
}
