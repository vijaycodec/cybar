<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use App\Repositories\Interfaces\ServicesRepositoryInterface;

class servicesController extends Controller
{

    protected $servicesRepository;

    public function __construct(ServicesRepositoryInterface $servicesRepository)
    {
        $this->servicesRepository = $servicesRepository;
    }

    public function getServices()
    {
        $page_id = 1;

        $services = $this->servicesRepository->getAllServices();
        $groupedServices = $this->servicesRepository->getGroupedServices();
        $categories = $this->servicesRepository->getCategoriesByPage($page_id);

        return view('frontend.services', compact('categories', 'services', 'page_id', 'groupedServices'));
    }

    }

