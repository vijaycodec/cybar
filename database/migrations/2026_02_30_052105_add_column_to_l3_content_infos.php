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
        Schema::table('l3_content_infos', function (Blueprint $table) {
            $table->text('program_title')->after('program_category_id' )->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('l3_content_infos', function (Blueprint $table) {
            $table->dropColumn('program_title');
        });
    }
};
