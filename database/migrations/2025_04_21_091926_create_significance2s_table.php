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
        Schema::create('significance2s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('l3_content_info_id');  
            $table->unsignedBigInteger('significance2_category_id'); // Foreign key to ceh_categories
            $table->unsignedBigInteger('page_id'); // This ensures a proper link with l3_content_infos
            $table->unsignedBigInteger('sub_category_id'); 
            $table->string('name'); // Name of the subcategory
            $table->text('significance2_title')->nullable();
            $table->text('significance2_short_description');
            $table->text('significance2_long_description');
            $table->string('image')->nullable(); // 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('significance2s');
    }
};
