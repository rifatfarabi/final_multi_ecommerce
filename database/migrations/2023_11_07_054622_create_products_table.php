<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('unit');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreignId('brand_id')->nullable()->references('id')->on('brands')->onDelete('cascade');
            $table->integer('purchase_qty');
            $table->boolean('refundable')->nullable();
            $table->string('thumbnail_image')->nullable();
            $table->integer('unit_price');
            $table->string('quantity');
            $table->text('description')->nullable();
            $table->string('sku')->nullable();
            $table->boolean('featured')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
