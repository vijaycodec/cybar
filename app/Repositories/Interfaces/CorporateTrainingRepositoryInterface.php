<?php

namespace App\Repositories\Interfaces;

interface CorporateTrainingRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $data, $request);
    public function update($id, array $data, $request);
    public function delete($id);
    public function getCategoriesByPageId($pageId);
    public function getSubCategoriesByCategoryId($categoryId);
    public function getCorporateTrainingWithCategories($id);

}
