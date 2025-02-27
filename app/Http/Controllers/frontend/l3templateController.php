<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\L3CategoryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;


class l3templateController extends Controller
{

    protected $l3CategoryRepository;

    public function __construct(L3CategoryRepositoryInterface $l3CategoryRepository)
    {
        $this->l3CategoryRepository = $l3CategoryRepository;
    }

    public function getL3(Request $request)
    {
        try {
            $pageId = $request->query('pg');
            $categoryId = $request->query('ct');
            $subcategoryId = $request->query('sb');

            $l3Categories = $this->l3CategoryRepository->getL3Categories($pageId, $categoryId, $subcategoryId);

            if ($l3Categories->isEmpty()) {
                abort(404, 'No L3 categories found.');
            }
            $contentInfos = $l3Categories->flatMap->contentInfos;

            return view('frontend.l3-template', compact('l3Categories', 'contentInfos'));
        } catch (Exception $e) {
            Log::error('Error in getL3: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
}
