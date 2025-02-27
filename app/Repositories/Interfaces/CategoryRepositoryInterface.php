<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface CategoryRepositoryInterface
{
    public function getAll();
    public function findById($id);
    public function create(array $data, Request $request);
    public function update($id, array $data, Request $request);
    public function delete($id);
}