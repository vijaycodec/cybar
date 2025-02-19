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
        Schema::create('faq_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('faq_category_id'); // Foreign key to ceh_categories
            $table->string('name'); // Name of the subcategory
            $table->text('description')->nullable(); // Description of the subcategory
            $table->timestamps();
        
            $table->foreign('faq_category_id')->references('id')->on('faq_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faq_sub_categories');
    }
};
