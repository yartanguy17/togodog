<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('carts', function (Blueprint $table) {
          $table->bigIncrements('id');
          
          $table->timestamps();
      });

        Schema::create('wishlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id')->unsigned();
            $table->unsignedBigInteger('cart_id')->unsigned()->nullable();
            $table->unsignedBigInteger('user_id');
            $table->float('price');
            $table->integer('quantity');
            $table->float('amount');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('CASCADE');
            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('SET NULL');
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
      Schema::dropIfExists('carts');
      Schema::dropIfExists('wishlists');
    }
}
