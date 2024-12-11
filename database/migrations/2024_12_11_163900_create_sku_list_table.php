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
        Schema::create('sku_list', function (Blueprint $table) {
            $table->id();
            $table->foreignId('variant_price_id')->constrained('variant_prices')->cascadeOnDelete();
            $table->string('sku_post')->comment('Seller SKU Postfix');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sku_list');
    }
};
