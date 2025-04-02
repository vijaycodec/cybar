<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\PageView;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TrackPageViews
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next)
    {
        $pageName = $this->extractPageName($request);
        $ip = $request->ip(); // Get user IP address
        $today = Carbon::today();

        if ($pageName) {
            // Check if this IP has visited before
            $existingVisit = PageView::where('user_ip', $ip)->exists();

            // Track page views and visitor status
            PageView::updateOrCreate(
                ['page_name' => $pageName, 'user_ip' => $ip, 'view_date' => $today],
                [
                    'is_new_visitor' => !$existingVisit, // Mark as new visitor if IP doesn't exist
                    'views' => DB::raw('COALESCE(views, 0) + 1') // Ensure views are incremented
                ]
            );
        }

        return $next($request);
    }

    /**
     * Extract the first segment of the URL to determine the page name dynamically.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    private function extractPageName(Request $request)
    {
        return $request->segment(1); // Extract first URL segment as page name
    }
}
