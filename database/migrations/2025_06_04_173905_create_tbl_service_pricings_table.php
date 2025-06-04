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
        Schema::create('tbl_service_pricings', function (Blueprint $table) {
            $table->id('pricing_id');
            $table->foreignId('service_id')->constrained('tbl_services')->onDelete('cascade');
            $table->string('pricing_name')->unique();
            $table->float('pricing_amount')->default(0.00);
            $table->string('pricing_currency')->default('USD');
            $table->integer('min_participants')->nullable();
            $table->integer('max_participants')->nullable();
            $table->date('valid_from')->nullable();
            $table->date('valid_until')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_service_pricings');
    }
};
