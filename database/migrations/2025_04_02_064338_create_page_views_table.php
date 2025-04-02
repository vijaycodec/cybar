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
        Schema::create('page_views', function (Blueprint $table) {
            $table->id();
            $table->string('page_name'); // Store page name (e.g., 'services', 'training')
            $table->string('user_ip')->nullable(); // Store user IP for tracking unique visitors
            $table->integer('views')->default(0); // Store view count
            $table->boolean('is_new_visitor')->default(false); // Track if visitor is new
            $table->date('view_date'); // Store daily view date
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_views');
    }
};
