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
        Schema::create('seos', function (Blueprint $table) {
            $table->id();
            $table->string('page_name');
            $table->string('category_name')->nullable();
            $table->string('sub_category_name')->nullable();
            $table->text('template_name');
            $table->text('seo_title');
            $table->text('seo_description');
            $table->text('seo_keywords');
            $table->text('google_analytics');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seos');
    }
};
