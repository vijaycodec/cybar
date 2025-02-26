<?php

namespace App\Repositories\Interfaces;
use Illuminate\Http\Request;

interface L3ContentRepositoryInterface
{
    public function getAllL3Contents();

    public function getCreateData();

    public function getL3Categories(Request $request);

    public function store(Request $request);

}
