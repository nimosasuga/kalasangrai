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
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('category')->index(); // espresso_bar, manual_brew, signature_cold, tea_botanical, artisan_pastry
            $table->text('description');
            $table->string('tasting_notes')->nullable();
            $table->string('serving_temperature')->default('Hot / Iced');
            $table->unsignedInteger('price');
            $table->boolean('is_recommended')->default(false);
            $table->boolean('is_seasonal')->default(false);
            $table->integer('sort_order')->default(0);
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
