<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_services', function (Blueprint $table) {
            $table->id('service_id');
            $table->foreignId('category_id')->constrained('tbl_service_categories')->onDelete('cascade');
            $table->string('service_name')->unique();
            $table->string('service_short_description')->nullable();
            $table->text('service_detailed_description')->nullable();
            $table->float('service_price')->default(0.00);
            $table->integer('service_duration')->default(0);
            $table->integer('max_participants')->default(1);
            $table->string('location')->nullable();
            $table->string('country')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_services');
    }
};
