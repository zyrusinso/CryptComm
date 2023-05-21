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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id', 100)->nullable();
            $table->string('product_id', 100)->nullable();
            $table->string('user_id', 35)->nullable();
            $table->string('checkout_id', 100)->nullable();
            $table->string('name', 60)->nullable();
            $table->string('amount', 25)->nullable();
            $table->string('quantity', 25)->nullable();
            $table->string('status', 35)->nullable();
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
        Schema::dropIfExists('orders');
    }
}
