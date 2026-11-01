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
        Schema::create('coffee_beans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('origin');
            $table->string('altitude');
            $table->string('varietal');
            $table->string('process');
            $table->string('roast_profile');
            $table->tinyInteger('acidity_level')->default(3); // scale 1-5
            $table->tinyInteger('body_level')->default(3);    // scale 1-5
            $table->tinyInteger('sweetness_level')->default(3); // scale 1-5
            $table->string('tasting_notes');
            $table->unsignedInteger('price_200g');
            $table->unsignedInteger('price_1kg');
            $table->text('description');
            $table->string('brewing_recommendation')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_in_stock')->default(true);
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffee_beans');
    }
};
