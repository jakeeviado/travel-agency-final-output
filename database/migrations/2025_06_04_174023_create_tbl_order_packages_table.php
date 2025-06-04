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
        Schema::create('tbl_order_packages', function (Blueprint $table) {
            $table->id('package_id');
            $table->foreignId('order_id')->constrained('tbl_orders')->onDelete('cascade');
            $table->foreignId('service_id')->constrained('tbl_services')->onDelete('cascade');
            $table->foreignId('pricing_id')->constrained('tbl_service_pricings')->onDelete('cascade');
            $table->integer('quantity')->default(1);
            $table->integer('participants')->default(1);
            $table->decimal('total_price', 10, 2)->default(0.00);
            $table->dateTime('travel_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_order_packages');
    }
};
