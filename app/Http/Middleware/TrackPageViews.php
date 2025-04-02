<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\PageView;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Jobs\TrackPageView; // Import Job class

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
        $ip = $request->ip(); 
        $today = Carbon::today();
    
        if ($pageName) {
            // Push the tracking task to a queue
            TrackPageView::dispatch($pageName, $ip, $today);
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
