<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface ServicesRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $data , $request);
    public function update($id, array $data, $request);
    public function delete($id);
}


