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
        Schema::create('testimonial_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('l3_content_info_id'); // Foreign key to l3_content_infos
            $table->string('testimonial_name'); // Name of the person giving the testimonial
            $table->string('designation')->nullable(); // Designation (optional)
            $table->longText('testimonial_description')->nullable(); // Testimonial content
            $table->text('testimonial_short_description')->nullable(); // Testimonial content
            $table->text('testimonial_title')->nullable();
            $table->string('images')->nullable(); 
            $table->timestamps();
            // $table->foreign('l3_content_info_id')->references('id')->on('l3_content_infos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonial_details');
    }
};
