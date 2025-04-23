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
        Schema::create('l3_overview2__descriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('l3_content_info_id');
            $table->text('overview2_title');
            $table->text('overview2_short_descriptions');
            $table->text('overview2_long_descriptions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('l3_overview2__descriptions');
    }
};
