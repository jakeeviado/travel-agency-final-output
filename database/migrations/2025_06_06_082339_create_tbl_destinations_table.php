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
        Schema::create('tbl_destinations', function (Blueprint $table) {
            $table->id('destination_id');
            $table->string('country', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('image_url', 255)->nullable();
            $table->boolean('is_available')->default(true);
            $table->boolean('is_top_destination')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_destinations');
    }
};
