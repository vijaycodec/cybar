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
        Schema::create('l3_content_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('l3_category_id');
            $table->unsignedBigInteger('page_category_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->text('l3_layout_type')->nullable();
            $table->text('l3_layout_program')->nullable();
            $table->string('images')->nullable(); 
            $table->string('brochure_pdf')->nullable();

            //overview section columns
            $table->text('overview_title')->nullable();
            $table->text('overview_description')->nullable();  //   Overview description

            //overview16 section columns
            $table->text('overview16_title')->nullable();
            $table->text('overview16_short_descriptions')->nullable();  
            $table->text('overview16_long_descriptions')->nullable();  

             //overview17 section columns
             $table->text('overview17_descriptions')->nullable();

            //overview sub description title section columns
            $table->text('overview3_title')->nullable();
            
            //significance section columns
            $table->integer('significance_category_type')->nullable();  //  Significance Category Name
            $table->longText('significance_description')->nullable();  //   Significance description  
            $table->text('significance_short_description')->nullable();  //   Significance description
            //course features section columns
            $table->integer('course_feature_type')->nullable();  //  Course Feature Category Name
            $table->longText('course_feature_description')->nullable();  // course Feature Description
            $table->longText('course_feature_short_description')->nullable();  // course Feature Description
            
            //significance2 section columns
            $table->text('significance2_category_type')->nullable();

            //cyberwind section columns
            $table->integer('cyberwind_type')->nullable();  //  Cyberwind Category Name
            $table->longText('cyberwind_description')->nullable();  //  Cyberwind description 
            $table->longText('cyberwind_short_description')->nullable();  //  Cyberwind description 

            //industry section columns
            $table->integer('industry_type')->nullable();  // Industry Category Name
            $table->text('industry_description')->nullable();  //   industry description

            //industry section columns
            $table->text('industry2_description')->nullable();  //   industry description
            $table->text('industry2_testimonial_name')->nullable();  //   industry description
            //faq section columns
            $table->unsignedBigInteger('faq_category_id')->nullable(); // Foreign key to faq_categories
            //Blog section columns
            $table->unsignedBigInteger('blog_category_type')->nullable(); // blog Category Name
            $table->longText('blog_description')->nullable();  // blog description

            $table->string('style_class_id')->nullable(); // Column to store background class

            // Incident columns 
            $table->text('incident_title')->nullable(); 
            $table->text('incident_description')->nullable();  

            $table->string('Video_link')->nullable(); 

            // CEHKIT columns
            $table->text('main_title')->nullable(); 
            $table->text('kit_title')->nullable();  
            $table->text('ceh_description')->nullable();
            
            //
              //program section columns
            $table->unsignedBigInteger('program_category_id')->nullable(); // Linked to program_categories
            $table->text('program_sub_title')->nullable();
            $table->text('program_description')->nullable(); // Category Description
            $table->string('program_image')->nullable(); // Program Image
            
                         
            $table->timestamps();

            $table->foreign('program_category_id')->references('id')->on('program_categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('l3_content_infos');
    }
};
