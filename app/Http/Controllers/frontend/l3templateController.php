<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\L3Category;
use App\Models\L3ContentInfo;
use App\Repositories\Interfaces\L3CategoryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class l3templateController extends Controller
{

    protected $l3CategoryRepository;

    public function __construct(L3CategoryRepositoryInterface $l3CategoryRepository)
    {
        $this->l3CategoryRepository = $l3CategoryRepository;
    }

    public function getL3(Request $request)
    {
        $pageId = $request->pageid;
        $categoryId = $request->category_id;
        $subcategoryId = $request->sub_category_id;

        $l3Categories = $this->l3CategoryRepository->getL3Categories($pageId, $categoryId, $subcategoryId);

        $contentInfos = $l3Categories->flatMap->contentInfos;

        return view('frontend.l3-template', compact('l3Categories', 'contentInfos'));
    }

}
