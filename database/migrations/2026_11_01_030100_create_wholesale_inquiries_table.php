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
        Schema::create('wholesale_inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('contact_name');
            $table->string('phone');
            $table->string('email');
            $table->string('business_type'); // Cafe, Restaurant, Corporate Office, Distributor, etc.
            $table->string('monthly_volume'); // <10kg, 10-30kg, 30-100kg, >100kg
            $table->string('preferred_blend')->nullable();
            $table->boolean('needs_equipment_consultation')->default(false);
            $table->text('notes')->nullable();
            $table->string('status')->default('new'); // new, contacted, in_progress, closed
            $table->string('ip_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wholesale_inquiries');
    }
};
