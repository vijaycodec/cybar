<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\OurServices;
use Illuminate\Http\Request;
use App\Models\PageView;
use Carbon\Carbon;

class dashboardController extends Controller
{
    public function dashboard()
    {
        // Get the last 7 days (including today)
        $dates = collect();
        for ($i = 4; $i >= 0; $i--) {
            $dates->push(Carbon::now()->subDays($i)->format('Y-m-d'));
        }
        
        // Convert collection to an array
        $dates = $dates->toArray();

        // Fetch unique pages dynamically
        $pages = PageView::select('page_name')->distinct()->pluck('page_name')->toArray();
        $newVisitors = PageView::where('is_new_visitor', true)->count();
        $returningVisitors = PageView::where('is_new_visitor', false)->count();
        $services = OurServices::with(['course_category', 'subcategory'])->latest()->take(1)->get();

        // Initialize views data with 0 for all pages and dates
        $pageViewsData = [];
        foreach ($pages as $page) {
            $pageViewsData[$page] = array_fill_keys($dates, 0); // Default all days to 0 views
        }

        // Fetch actual views per page from the database (SUM the views)
        $pageViews = PageView::whereIn('view_date', $dates)
            ->selectRaw('page_name, DATE(view_date) as view_date, SUM(views) as total_views') // FIX: Sum views instead of counting rows
            ->groupBy('page_name', 'view_date')
            ->get();

        // Merge actual data into the initialized array
        foreach ($pageViews as $view) {
            if (isset($pageViewsData[$view->page_name][$view->view_date])) {
                $pageViewsData[$view->page_name][$view->view_date] = (int) $view->total_views; // Store correct view count
            }
        }

        return view('backend.admin.dashboard', compact('dates', 'pageViewsData', 'pages', 'newVisitors', 'returningVisitors', 'services'));
    }
}
