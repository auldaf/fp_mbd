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
        if (!Schema::hasTable('employees')) {
            Schema::create('employees', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->timestamps();
                $table->string('name', 100)->nullable();
                $table->string('company', 50)->nullable();
                $table->string('email_address', 50)->nullable();
                $table->string('mobile_phone', 25)->nullable();
                $table->string('address', 255)->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
