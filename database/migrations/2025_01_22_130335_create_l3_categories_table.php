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
        Schema::create('l3_categories', function (Blueprint $table) {
            // $table->id();
            // $table->integer('page_category_id');
            // $table->integer('category_id');
            // $table->integer('sub_category_id'); 
            // $table->string('l3_category'); 
            // $table->timestamps();

            $table->id();
            $table->unsignedBigInteger('page_category_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->string('l3_category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('l3_categories');
    }
};
