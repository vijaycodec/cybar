<?php

namespace App\Repositories\Interfaces;

interface L3CategoryRepositoryInterface
{
    public function getL3Categories($pageId, $categoryId, $subcategoryId);
    // public function getL3Categories($page_name, $category_name, $sub_category_name);

}
