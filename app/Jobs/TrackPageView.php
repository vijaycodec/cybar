<?php
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\PageView;
use Illuminate\Support\Facades\DB;

class TrackPageView implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $pageName, $ip, $today;

    public function __construct($pageName, $ip, $today)
    {
        $this->pageName = $pageName;
        $this->ip = $ip;
        $this->today = $today;
    }

    public function handle()
    {
        $existingVisit = PageView::where('user_ip', $this->ip)->exists();

        PageView::updateOrCreate(
            ['page_name' => $this->pageName, 'user_ip' => $this->ip, 'view_date' => $this->today],
            [
                'is_new_visitor' => !$existingVisit, 
                'views' => DB::raw('COALESCE(views, 0) + 1')
            ]
        );
    }
}
