<?php

namespace App\Repositories\Interfaces;

interface ResourceRepositoryInterface
{
    public function getAllResources();
    public function getResourceById($id);
    public function createResource(array $data, $request);
    public function updateResource($id, array $data, $request);
    public function deleteResource($id);
    public function getCategoriesByType($type);
}
