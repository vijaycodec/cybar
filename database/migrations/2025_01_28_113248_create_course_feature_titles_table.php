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
        Schema::create('course_feature_titles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('l3_content_info_id'); // Foreign key for L3ContentInfo, but no actual foreign key constraint
            $table->longtext('title')->nullable(); // Significance title
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_feature_titles');
    }
};
