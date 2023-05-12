<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_id')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->decimal('local_price_amount', 8, 2)->nullable();
            $table->string('local_price_currency', 3)->nullable();
            $table->string('logo_url')->nullable();
            $table->string('brand_color')->nullable();
            $table->boolean('coinbase_managed_merchant')->nullable();
            $table->string('brand_logo_url')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('pricing_type')->nullable();
            $table->string('resource')->nullable();
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
        Schema::dropIfExists('products');
    }
}
