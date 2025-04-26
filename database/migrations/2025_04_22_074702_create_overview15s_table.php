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
        Schema::create('overview15s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('l3_content_info_id');
            $table->text('overview15_title');
            $table->text('overview15_descriptions');
            $table->string('image')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('overview15s');
    }
};
