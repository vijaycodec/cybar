<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface CareerRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $data, $request);
    public function update($id, array $data);
    public function delete($id);
}
