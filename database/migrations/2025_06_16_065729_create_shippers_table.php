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
        if (!Schema::hasTable('shippers')) {
            Schema::create('shippers', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('company_name', 50);
                $table->string('phone', 25)->nullable();
                $table->string('email_address', 50)->nullable();
                $table->string('address', 255)->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shippers');
    }
};
