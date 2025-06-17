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
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->increments('id');
                $table->text('supplier_ids')->nullable();
                $table->string('product_code', 25)->nullable();
                $table->string('product_name', 50)->nullable();
                $table->text('description')->nullable();
                $table->decimal('list_price', 8, 2);
                $table->string('product_category', 50)->nullable();
                $table->string('product_image', 255);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
