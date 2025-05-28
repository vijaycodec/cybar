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
        Schema::create('course_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('page_category'); // Name column with max length of 100 characters
            $table->string('category_group', 100); // Name column with max length of 100 character
            $table->string('name', 100); // Name column with max length of 100 characters
            $table->string('slug', 500); // Name column with max length of 100 characters
            $table->string('title', 100); // Name column with max length of 100 characters
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_categories');
    }
};
