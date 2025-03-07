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

    public function getl3($page_name, $category_name, $sub_category_name)
    {

            $l3Categories = $this->l3CategoryRepository->getL3Categories($page_name, $category_name, $sub_category_name);

            if ($l3Categories->isEmpty()) {
                abort(404, 'No L3 categories found.');
            }
            $contentInfos = $l3Categories->flatMap->contentInfos;

            return view('frontend.l3-template', compact('l3Categories', 'contentInfos'));
       
    }
}
