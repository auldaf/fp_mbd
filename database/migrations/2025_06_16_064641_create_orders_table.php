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
        if (!Schema::hasTable('orders')) {
            Schema::create('orders', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('employee_id')->unsigned();
                $table->bigInteger('customer_id')->unsigned();
                $table->bigInteger('shipper_id')->unsigned()->nullable();
                $table->dateTime('order_date');
                $table->dateTime('shipped_date')->nullable();
                $table->text('ship_address');
                $table->text('ship_name');
                $table->decimal('shipping_fee', 19, 4)->default(0);
                $table->string('payment_type', 50)->nullable();
                $table->dateTime('paid_date')->nullable();
                $table->string('status', 50)->default('Pending');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
