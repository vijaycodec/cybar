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
        Schema::create('menu_testimonials', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id'); // Foreign key to l3_content_infos
            $table->string('user_name'); // Name of the person giving the testimonial
            $table->string('images')->nullable();
            $table->string('designation')->nullable(); // Designation (optional)
            $table->longText('testimonial_description')->nullable(); // Testimonial content
            $table->text('testimonial_short_description')->nullable(); // Testimonial content
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_testimonials');
    }
};
