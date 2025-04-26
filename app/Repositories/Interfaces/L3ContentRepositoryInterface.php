<?php

namespace App\Repositories\Interfaces;
use Illuminate\Http\Request;

interface L3ContentRepositoryInterface
{
    public function getAllL3Contents();

    public function getCreateData();

    public function getl3contentById($id);
    // public function deleteL3Content($id);
    public function getL3Categories(Request $request);

    public function store(Request $request);

    public function updatel3content($id, array $data, Request $request); // Add this method

}
