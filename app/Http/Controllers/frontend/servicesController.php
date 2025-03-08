<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use App\Repositories\Interfaces\ServicesRepositoryInterface;
use Illuminate\Http\Request;

class servicesController extends Controller
{

    protected $servicesRepository;

    public function __construct(ServicesRepositoryInterface $servicesRepository)
    {
        $this->servicesRepository = $servicesRepository;
    }

    public function getServices($category = null, $sub_category = null)
    {
        $page_id = 1;
        $page_name ='services';

        $services = $this->servicesRepository->getAllServices();
        $groupedServices = $this->servicesRepository->getGroupedServices();
        $categories = $this->servicesRepository->getCategoriesByPage($page_id);

        $seoData = Seo::where('page_name', $page_name)
        ->where('category_name', $category)
        ->where('sub_category_name', $sub_category)
        ->first();

    // Define default values if any field is NULL
        $seoData = [
            'page_name'       => $seoData->page_name ?? 'Services Page',
            'category_name'   => $seoData->category_name ?? 'General Services Category',
            'sub_category_name' => $seoData->sub_category_name ?? 'General Subcategory',
            'template_name'   => $seoData->template_name ?? 'default-template',
            'seo_title'       => $seoData->seo_title ?? 'Default Service Title',
            'seo_description' => $seoData->seo_description ?? 'Default Services Description',
            'seo_keywords'    => $seoData->seo_keywords ?? 'default,Services keywords',
            'google_analytics' => $seoData->google_analytics ?? 'Test google analytics',
        ];

        return view('frontend.services', compact('categories', 'services', 'page_id', 'groupedServices','seoData'));
    }

//     public function getServices(Request $request , $category = null)
// {
//     $page_id = 1;
    
//     $seoData=Seo::all();

//     $services = $this->servicesRepository->getAllServices();
//     $groupedServices = $this->servicesRepository->getGroupedServices();
//     $categories = $this->servicesRepository->getCategoriesByPage($page_id);

//     return view('frontend.services', compact('categories', 'services', 'page_id', 'groupedServices'));
// }

    }

