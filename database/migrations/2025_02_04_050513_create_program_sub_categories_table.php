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
        Schema::create('program_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('l3_content_info_id'); 
            $table->unsignedBigInteger('program_category_id'); // Links to program_categories
            $table->unsignedBigInteger('page_id'); // This ensures a proper link with l3_content_infos
            $table->unsignedBigInteger('sub_category_id'); // This ensures a proper link with l3_content_infos
            $table->string('name'); // Subcategory Name
            $table->text('description')->nullable(); // Subcategory Description
            $table->string('image')->nullable(); // Subcategory Image
            $table->timestamps();

            $table->foreign('program_category_id')->references('id')->on('program_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_sub_categories');
    }
};
