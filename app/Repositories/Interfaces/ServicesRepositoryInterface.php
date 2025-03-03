<?php

namespace App\Repositories\Interfaces;

interface ServicesRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $data , $request);
    public function update($id, array $data, $request);
    public function delete($id);

    //Frontend interface implementation
    public function getAllServices();
    public function getGroupedServices();
    public function getCategoriesByPage($pageId);
}


