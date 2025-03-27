<?php

use App\Http\Controllers\backend\authController;
use App\Http\Controllers\backend\blogsubCategoryController;
use App\Http\Controllers\frontend\blogController;
use App\Http\Controllers\frontend\blogViewController;
use App\Http\Controllers\frontend\careerController;
use App\Http\Controllers\frontend\cnInsightController;
use App\Http\Controllers\frontend\contactController;
use App\Http\Controllers\frontend\eventController;
use App\Http\Controllers\frontend\eventViewController;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\l3templateController;
use App\Http\Controllers\frontend\resourcesController;
use App\Http\Controllers\frontend\resourcesViewController;
use App\Http\Controllers\frontend\servicesController;
use App\Http\Controllers\frontend\testimonialsController;
use App\Http\Controllers\frontend\trainingController;
use App\Http\Controllers\backend\commentController;
use App\Http\Controllers\backend\courseCategoryController;
use App\Http\Controllers\backend\loginController;
use App\Http\Controllers\backend\dashboardController;
use App\Http\Controllers\backend\l3_categoryController;
use App\Http\Controllers\backend\l3_contentController;
use App\Http\Controllers\backend\ourServicesController;
use App\Http\Controllers\backend\resourcesCategoriesController;
use App\Http\Controllers\backend\resourcesController as BackendResourcesController;
use App\Http\Controllers\backend\subcategoryController;
use App\Http\Controllers\backend\corporateController;
use App\Http\Controllers\backend\menublogController;
use App\Http\Controllers\backend\menueventController;
use App\Http\Controllers\backend\menutestimonialController;
use App\Http\Controllers\backend\careerController  as BackendCareerController;
use App\Http\Controllers\backend\coursrfeaturesController;
use App\Http\Controllers\backend\cyberwimdController;
use App\Http\Controllers\backend\EnquiryController;
use App\Http\Controllers\backend\faqController;
use App\Http\Controllers\backend\industriesController;
use App\Http\Controllers\backend\jobCarrerController;
use App\Http\Controllers\backend\NewsLetterController;
use App\Http\Controllers\backend\SearchController;
use App\Http\Controllers\backend\seoController;
use App\Http\Controllers\frontend\BrochurePdfController;
use App\Http\Controllers\frontend\careerViewController;
use App\Http\Controllers\frontend\templateController;
use App\Http\Controllers\frontend\NewsLetteViewsController;
use App\Http\Controllers\frontend\PodcastController;
use App\Http\Controllers\backend\podcastController as BackendPodcastController;
use App\Http\Controllers\backend\programController;
use App\Http\Controllers\backend\significanceController;
use App\Http\Controllers\frontend\NewsLetterMainController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['FrameGuard'])->group(function () {
    Route::get('/', [homeController::class, 'index'])->name('home');
    Route::get('/services', [servicesController::class, 'getServices'])->name('services');
    Route::get('/training', [trainingController::class, 'get_training'])->name('training');
    Route::get('/resources', [resourcesController::class, 'index'])->name('resources');
    Route::get('/resources-view/{id?}', [resourcesViewController::class, 'view'])->name('resources-view');
    Route::get('/resources-view-trending/{id?}', [resourcesViewController::class, 'trendingResourceView'])->name('resources-view-trending');

    Route::get('/blog', [blogController::class, 'index'])->name('blogs');
    Route::get('/blog-view/{id?}', [blogViewController::class, 'view'])->name('blog-view');
    Route::get('/blog-view-trending/{id?}', [blogViewController::class, 'trendingResourceView'])->name('blog-view-trending');
    Route::get('/events', [eventController::class, 'index'])->name('events');
    Route::get('/events-view/{id?}', [eventViewController::class, 'view'])->name('events-view');

    Route::get('/testimonials', [testimonialsController::class, 'index'])->name('testimonials');
    Route::get('/career', [careerController::class, 'index'])->name('careers');
    Route::get('/career-view/{id?}', [careerViewController::class, 'view'])->name('careers-view');
    Route::get('/contact', [contactController::class, 'index'])->name('contact');
    Route::get('/cn-insight', [cnInsightController::class, 'index'])->name('cn-insight');
    Route::get('/l3-template', [l3templateController::class, 'getl3'])->name('l3-template');

    Route::get('/login', [loginController::class, 'login'])->name('login');
    // Route::get('/add-blog-data', [Indexcontroller::class, 'add_blog_data'])->name('add_blog_data');
    Route::post('/login/user', [loginController::class, 'loginsave'])->name('loginsave');

    Route::get('/template1', [templateController::class, 'template1'])->name('template1');
    Route::get('/template2', [templateController::class, 'template2'])->name('template2');
    Route::get('/fraud-detection', [templateController::class, 'fraudDetection'])->name('fraud-detection');

    Route::post('/submit-enquiry', [EnquiryController ::class, 'submitEnquiry'])->name('submit.enquiry');
    Route::post('/comment/user', [commentController::class, 'store'])->name('resources-comment.store');
    Route::post('/career/jobs', [jobCarrerController::class, 'store'])->name('job.career.store');

    Route::get('/search-resources', [SearchController::class, 'search']);
    Route::get('/newsletter', [NewsLetterMainController::class, 'index'])->name('newsletter.main');

    Route::get('/news-letter/{id?}', [NewsLetteViewsController ::class, 'newLetterView'])->name('newLetter.View'); //trendingNewsLetterView
    Route::get('/newsletter/view-trending/{id?}', [NewsLetteViewsController::class, 'trendingNewsLetterView'])->name('newsletter-view-trending');
    Route::get('/podcast', [PodcastController ::class, 'podcast'])->name('podcast.View');

    Route::get('/download-brochure/{file}', [BrochurePdfController::class, 'download'])
    ->name('download.brochure');

});

Route::middleware(['auth','admin','prevent_history'])->group(function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/comment/user/list', [commentController::class, 'index'])->name('resources-comment.list');
    Route::get('/comment/user/show/{id}', [commentController::class, 'show'])->name('resources-comment.show');
    Route::get('/comment/user/delete/{id}', [commentController::class, 'destroy'])->name('resources-comment.destroy');

    // BACKEND ROUTES 
    //Resource-Category Routes
    route::get('/resources-category/list', [resourcesCategoriesController::class, 'index'])->name('resources-category.list');
    route::get('/resources-category/create', [resourcesCategoriesController::class, 'create'])->name('resources-category.create');
    route::post('/resources-category/store', [resourcesCategoriesController::class, 'store'])->name('resources-category.store');
    Route::get('/resources-category/show/{id}', [resourcesCategoriesController::class, 'show'])->name('resources-category.show');
    route::get('/resources-category/edit/{id}', [resourcesCategoriesController::class, 'edit'])->name('resources-category.edit');
    Route::put('resources-category/update/{id}', [resourcesCategoriesController::class, 'update'])->name('resources-category.update');
    Route::delete('resources-category/delete/{id}', [resourcesCategoriesController::class, 'destroy'])->name('resources-category.destroy');

    // Resource Routes
    route::get('/resources/list', [BackendResourcesController::class, 'index'])->name('resources.list');
    route::get('/resources/create', [BackendResourcesController::class, 'create'])->name('resources.create');
    route::post('/resources/store', [BackendResourcesController::class, 'store'])->name('resources.store');
    Route::get('/resources/show/{id}', [BackendResourcesController::class, 'show'])->name('resources.show');
    route::get('/resources/edit/{id}', [BackendResourcesController::class, 'edit'])->name('resources.edit');
    Route::put('resources/update/{id}', [BackendResourcesController::class, 'update'])->name('resources.update');
    Route::delete('resources/delete/{id}', [BackendResourcesController::class, 'destroy'])->name('resources.destroy');

    //Course-category Routes
    route::get('/course-category/list', [courseCategoryController::class, 'index'])->name('course-category.list');
    route::get('/course-category/create', [courseCategoryController::class, 'create'])->name('course-category.create');
    route::post('/course-category/store', [courseCategoryController::class, 'store'])->name('course-category.store');
    Route::get('/course-category/show/{id}', [courseCategoryController::class, 'show'])->name('course-category.show');
    route::get('/course-category/edit/{id}', [courseCategoryController::class, 'edit'])->name('course-category.edit');
    Route::put('course-category/update/{id}', [courseCategoryController::class, 'update'])->name('course-category.update');
    Route::delete('course-category/delete/{id}', [courseCategoryController::class, 'destroy'])->name('course-category.destroy');

    // our Service Routes
    route::get('/our-services/list', [ourServicesController::class, 'index'])->name('our-services.list');
    route::get('/our-services/create/{pageId}', [ourServicesController::class, 'create'])->name('our-services.create');
    route::post('/our-services/store', [ourServicesController::class, 'store'])->name('our-services.store');
    Route::get('/our-services/show/{id}', [ourServicesController::class, 'show'])->name('our-services.show');
    route::get('/our-services/edit/{id}', [ourServicesController::class, 'edit'])->name('our-services.edit');
    Route::put('our-services/update/{id}', [ourServicesController::class, 'update'])->name('our-services.update');
    Route::delete('our-services/delete/{id}', [ourServicesController::class, 'destroy'])->name('our-services.destroy');
    Route::get('/get-categories/services', [ourServicesController::class, 'getSubCategories'])->name('get-categories.get');

    // Sub Category Routes
    route::get('/sub-category/list', [subcategoryController::class, 'index'])->name('sub-category.list');
    route::get('/sub-category/create', [subcategoryController::class, 'create'])->name('sub-category.create');
    route::post('/sub-category/store', [subcategoryController::class, 'store'])->name('sub-category.store');
    Route::get('/sub-category/show/{id}', [subcategoryController::class, 'show'])->name('sub-category.show');
    route::get('/sub-category/edit/{id}', [subcategoryController::class, 'edit'])->name('sub-category.edit');
    Route::put('sub-category/update/{id}', [subcategoryController::class, 'update'])->name('sub-category.update');
    Route::delete('sub-category/delete/{id}', [subcategoryController::class, 'destroy'])->name('sub-category.destroy');
    // Sub Category dependent Routes
    Route::get('/get-categories', [subcategoryController::class, 'getCategories'])->name('get-categories');

    // L3 category Routes
    route::get('/l3-category/list', [l3_categoryController::class, 'index'])->name('l3-category.list');
    route::get('/l3-category/create', [l3_categoryController::class, 'create'])->name('l3-category.create');
    route::post('/l3-category/store', [l3_categoryController::class, 'store'])->name('l3-category.store');
    Route::get('/l3-category/show/{id}', [l3_categoryController::class, 'show'])->name('l3-category.show');
    route::get('/l3-category/edit/{id}', [l3_categoryController::class, 'edit'])->name('l3-category.edit');
    Route::put('l3-category/update/{id}', [l3_categoryController::class, 'update'])->name('l3-category.update');
    Route::delete('l3-category/delete/{id}', [l3_categoryController::class, 'destroy'])->name('l3-category.destroy');
    // L3 category and sub-category Dependent Routes 
    Route::get('/l3-get-categories', [l3_categoryController::class, 'l3GetCategories'])->name('l3-get-categories');
    Route::get('/l3-get-subcategories', [l3_categoryController::class, 'l3GetSubCategories'])->name('l3-get-subcategories');

    // L3 Content Routes
    route::get('/l3-content/list', [l3_contentController::class, 'index'])->name('l3-content.list');
    route::get('/l3-content/create', [l3_contentController::class, 'create'])->name('l3-content.create');
    route::post('/l3-content/store', [l3_contentController::class, 'store'])->name('l3-content.store');
    Route::get('/l3-content/show/{id}', [l3_contentController::class, 'show'])->name('l3-content.show');
    route::get('/l3-content/edit/{id}', [l3_contentController::class, 'edit'])->name('l3-content.edit');
    Route::put('l3-content/update/{id}', [l3_contentController::class, 'update'])->name('l3-content.update');
    Route::delete('l3-content/delete/{id}', [l3_contentController::class, 'destroy'])->name('l3-content.destroy');
    //category and sub-category and L3 Dependent Routes 
    Route::get('content/l3-get-categories', [l3_contentController::class, 'l3GetL3Categories'])->name('l3-get-l3categories') ->middleware('throttle:10,1'); // 10 requests per minute;
    
    // corporate training Routes
    route::get('/corporate-training/list', [corporateController::class, 'index'])->name('corporate-training.list');
    route::get('/corporate-training/create/{pageId}', [corporateController::class, 'create'])->name('corporate-training.create');
    route::post('/corporate-training/store', [corporateController::class, 'store'])->name('corporate-training.store');
    Route::get('/corporate-training/show/{id}', [corporateController::class, 'show'])->name('corporate-training.show');
    route::get('/corporate-training/edit/{id}', [corporateController::class, 'edit'])->name('corporate-training.edit');
    Route::put('corporate-training/update/{id}', [corporateController::class, 'update'])->name('corporate-training.update');
    Route::delete('corporate-training/delete/{id}', [corporateController::class, 'destroy'])->name('corporate-training.destroy');
    Route::get('/get-categories/services', [corporateController::class, 'getSubCategories'])->name('get-categories.get');

    // Menublog Routes
    route::get('/menublog/list', [menublogController::class, 'index'])->name('menublog.list');
    route::get('/menublog/create', [menublogController::class, 'create'])->name('menublog.create');
    route::post('/menublog/store', [menublogController::class, 'store'])->name('menublog.store');
    Route::get('/menublog/show/{id}', [menublogController::class, 'show'])->name('menublog.show');
    route::get('/menublog/edit/{id}', [menublogController::class, 'edit'])->name('menublog.edit');
    Route::put('menublog/update/{id}', [menublogController::class, 'update'])->name('menublog.update');
    Route::delete('menublog/delete/{id}', [menublogController::class, 'destroy'])->name('menublog.destroy');

    // Event Routes
    route::get('/menuevent/list', [menueventController::class, 'index'])->name('menuevent.list');
    route::get('/menuevent/create', [menueventController::class, 'create'])->name('menuevent.create');
    route::post('/menuevent/store', [menueventController::class, 'store'])->name('menuevent.store');
    Route::get('/menuevent/show/{id}', [menueventController::class, 'show'])->name('menuevent.show');
    route::get('/menuevent/edit/{id}', [menueventController::class, 'edit'])->name('menuevent.edit');
    Route::put('menuevent/update/{id}', [menueventController::class, 'update'])->name('menuevent.update');
    Route::delete('menuevent/delete/{id}', [menueventController::class, 'destroy'])->name('menuevent.destroy');

    // Testimonials Routes
    route::get('/menutestimonial/list', [menutestimonialController::class, 'index'])->name('menutestimonial.list');
    route::get('/menutestimonial/create', [menutestimonialController::class, 'create'])->name('menutestimonial.create');
    route::post('/menutestimonial/store', [menutestimonialController::class, 'store'])->name('menutestimonial.store');
    Route::get('/menutestimonial/show/{id}', [menutestimonialController::class, 'show'])->name('menutestimonial.show');
    route::get('/menutestimonial/edit/{id}', [menutestimonialController::class, 'edit'])->name('menutestimonial.edit');
    Route::put('menutestimonial/update/{id}', [menutestimonialController::class, 'update'])->name('menutestimonial.update');
    Route::delete('menutestimonial/delete/{id}', [menutestimonialController::class, 'destroy'])->name('menutestimonial.destroy');

    // Careers Routes
    route::get('/career/list', [BackendCareerController::class, 'index'])->name('career.list');
    route::get('/career/create', [BackendCareerController::class, 'create'])->name('career.create');
    route::post('/career/store', [BackendCareerController::class, 'store'])->name('career.store');
    Route::get('/career/show/{id}', [BackendCareerController::class, 'show'])->name('career.show');
    route::get('/career/edit/{id}', [BackendCareerController::class, 'edit'])->name('career.edit');
    Route::put('career/update/{id}', [BackendCareerController::class, 'update'])->name('career.update');
    Route::delete('career/delete/{id}', [BackendCareerController::class, 'destroy'])->name('career.destroy');

    // SEO Details Routes
    route::get('/seo-details/list', [seoController::class, 'index'])->name('seo-details.list');
    route::get('/seo-details/create', [seoController::class, 'create'])->name('seo-details.create');
    route::post('/seo-details/store', [seoController::class, 'store'])->name('seo-details.store');
    Route::get('/seo-details/show/{id}', [seoController::class, 'show'])->name('seo-details.show');
    route::get('/seo-details/edit/{id}', [seoController::class, 'edit'])->name('seo-details.edit');
    Route::put('seo-details/update/{id}', [seoController::class, 'update'])->name('seo-details.update');
    Route::delete('seo-details/delete/{id}', [seoController::class, 'destroy'])->name('seo-details.destroy');

     // L3 category and sub-category Dependent Routes 
     Route::get('/seo-get-categories', [seoController::class, 'SeoGetCategories'])->name('seo-get-categories');
     Route::get('/seo-get-subcategories', [seoController::class, 'SeoGetSubCategories'])->name('seo-get-subcategories');

     // newsletter Routes
    route::get('/newsletter/list', [NewsLetterController::class, 'index'])->name('newsletter.list');
    route::get('/newsletter/create', [NewsLetterController::class, 'create'])->name('newsletter.create');
    route::post('/newsletter/store', [NewsLetterController::class, 'store'])->name('newsletter.store');
    Route::get('/newsletter/show/{id}', [NewsLetterController::class, 'show'])->name('newsletter.show');
    route::get('/newsletter/edit/{id}', [NewsLetterController::class, 'edit'])->name('newsletter.edit');
    Route::put('newsletter/update/{id}', [NewsLetterController::class, 'update'])->name('newsletter.update');
    Route::delete('newsletter/delete/{id}', [NewsLetterController::class, 'destroy'])->name('newsletter.destroy');

    // prodcast Routes
    route::get('/podcast/list', [BackendPodcastController::class, 'index'])->name('podcast.list');
    route::get('/podcast/create', [BackendPodcastController::class, 'create'])->name('podcast.create');
    route::post('/podcast/store', [BackendPodcastController::class, 'store'])->name('podcast.store');
    Route::get('/podcast/show/{id}', [BackendPodcastController::class, 'show'])->name('podcast.show');
    route::get('/podcast/edit/{id}', [BackendPodcastController::class, 'edit'])->name('podcast.edit');
    Route::put('podcast/update/{id}', [BackendPodcastController::class, 'update'])->name('podcast.update');
    Route::delete('podcast/delete/{id}', [BackendPodcastController::class, 'destroy'])->name('podcast.destroy');

    //Significance-sub category Routes
    route::get('/significance/list', [significanceController::class, 'index'])->name('significance.list');
    route::get('/significance/create', [significanceController::class, 'create'])->name('significance.create');
    route::post('/significance/store', [significanceController::class, 'store'])->name('significance.store');
    Route::get('/significance/show/{id}', [significanceController::class, 'show'])->name('significance.show');
    route::get('/significance/edit/{id}', [significanceController::class, 'edit'])->name('significance.edit');
    Route::put('significance/update/{id}', [significanceController::class, 'update'])->name('significance.update');
    Route::delete('significance/delete/{id}', [significanceController::class, 'destroy'])->name('significance.destroy');


    //Program-sub category Routes
    route::get('/program/list', [programController::class, 'index'])->name('program.list');
    route::get('/program/create', [programController::class, 'create'])->name('program.create');
    route::post('/program/store', [programController::class, 'store'])->name('program.store');
    Route::get('/program/show/{id}', [programController::class, 'show'])->name('program.show');
    route::get('/program/edit/{id}', [programController::class, 'edit'])->name('program.edit');
    Route::put('program/update/{id}', [programController::class, 'update'])->name('program.update');
    Route::delete('program/delete/{id}', [programController::class, 'destroy'])->name('program.destroy');


    //coursefeature-sub category Routes
    route::get('/coursefeature/list', [coursrfeaturesController::class, 'index'])->name('coursefeature.list');
    route::get('/coursefeature/create', [coursrfeaturesController::class, 'create'])->name('coursefeature.create');
    route::post('/coursefeature/store', [coursrfeaturesController::class, 'store'])->name('coursefeature.store');
    Route::get('/coursefeature/show/{id}', [coursrfeaturesController::class, 'show'])->name('coursefeature.show');
    route::get('/coursefeature/edit/{id}', [coursrfeaturesController::class, 'edit'])->name('coursefeature.edit');
    Route::put('coursefeature/update/{id}', [coursrfeaturesController::class, 'update'])->name('coursefeature.update');
    Route::delete('coursefeature/delete/{id}', [coursrfeaturesController::class, 'destroy'])->name('coursefeature.destroy');

    //industry-sub category Routes
    route::get('/industry/list', [industriesController::class, 'index'])->name('industry.list');
    route::get('/industry/create', [industriesController::class, 'create'])->name('industry.create');
    route::post('/industry/store', [industriesController::class, 'store'])->name('industry.store');
    Route::get('/industry/show/{id}', [industriesController::class, 'show'])->name('industry.show');
    route::get('/industry/edit/{id}', [industriesController::class, 'edit'])->name('industry.edit');
    Route::put('industry/update/{id}', [industriesController::class, 'update'])->name('industry.update');
    Route::delete('industry/delete/{id}', [industriesController::class, 'destroy'])->name('industry.destroy');

        //cyberwind-sub category Routes
        route::get('/cyberwind/list', [cyberwimdController::class, 'index'])->name('cyberwind.list');
        route::get('/cyberwind/create', [cyberwimdController::class, 'create'])->name('cyberwind.create');
        route::post('/cyberwind/store', [cyberwimdController::class, 'store'])->name('cyberwind.store');
        Route::get('/cyberwind/show/{id}', [cyberwimdController::class, 'show'])->name('cyberwind.show');
        route::get('/cyberwind/edit/{id}', [cyberwimdController::class, 'edit'])->name('cyberwind.edit');
        Route::put('cyberwind/update/{id}', [cyberwimdController::class, 'update'])->name('cyberwind.update');
        Route::delete('cyberwind/delete/{id}', [cyberwimdController::class, 'destroy'])->name('cyberwind.destroy');
    
        //blog-sub category Routes
        route::get('/blog/list', [blogsubCategoryController::class, 'index'])->name('blog.list');
        route::get('/blog/create', [blogsubCategoryController::class, 'create'])->name('blog.create');
        route::post('/blog/store', [blogsubCategoryController::class, 'store'])->name('blog.store');
        Route::get('/blog/show/{id}', [blogsubCategoryController::class, 'show'])->name('blog.show');
        route::get('/blog/edit/{id}', [blogsubCategoryController::class, 'edit'])->name('blog.edit');
        Route::put('blog/update/{id}', [blogsubCategoryController::class, 'update'])->name('blog.update');
        Route::delete('blog/delete/{id}', [blogsubCategoryController::class, 'destroy'])->name('blog.destroy');
    
        //faq-sub category Routes
        route::get('/faq/list', [faqController::class, 'index'])->name('faq.list');
        route::get('/faq/create', [faqController::class, 'create'])->name('faq.create');
        route::post('/faq/store', [faqController::class, 'store'])->name('faq.store');
        Route::get('/faq/show/{id}', [faqController::class, 'show'])->name('faq.show');
        route::get('/faq/edit/{id}', [faqController::class, 'edit'])->name('faq.edit');
        Route::put('faq/update/{id}', [faqController::class, 'update'])->name('faq.update');
        Route::delete('faq/delete/{id}', [faqController::class, 'destroy'])->name('faq.destroy');

});


