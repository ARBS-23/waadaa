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
        Schema::create('variant_prices', function (Blueprint $table) {
            $table->id();
            $table->string('waadaa_sku')->index();
            $table->foreign('waadaa_sku')->references('waadaa_sku')->on('variant_groups')->cascadeOnDelete();
            $table->decimal('price', 10);
            $table->integer('stock');
            $table->string('sku_pre')->comment('Seller SKU Prefix');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variant_prices');
    }
};
