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
        Schema::create('tbl_packages', function (Blueprint $table) {
            $table->id('package_id');
            $table->foreignId('destination_id')->constrained('tbl_destinations', 'destination_id')->onDelete('cascade');
            $table->foreignId('pricing_id')->constrained('tbl_pricings', 'pricing_id')->onDelete('cascade');
            $table->string('package_name', 100)->unique();
            $table->string('description', 255)->nullable();
            $table->integer('duration')->default(0);
            $table->boolean('is_active')->default(true);
            $table->dateTime('departure_date')->nullable();
            $table->dateTime('return_date')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_popular')->default(false);
            $table->boolean('is_discounted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_packages');
    }
};
