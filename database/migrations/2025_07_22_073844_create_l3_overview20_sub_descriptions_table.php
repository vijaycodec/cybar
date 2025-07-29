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
        Schema::create('l3_overview20_sub_descriptions', function (Blueprint $table) {
           $table->id();
            $table->unsignedBigInteger('l3_content_info_id'); 
            $table->text('overview20_subdescription_title')->nullable();
            $table->text('overview20_sub_description');
            $table->timestamps();

            $table->foreign('l3_content_info_id')->references('id')->on('l3_content_infos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('l3_overview20_sub_descriptions');
    }
};
