<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CareerRepositoryInterface;
use App\Models\Career;

class CareerRepository implements CareerRepositoryInterface
{
    public function getAll()
    {
        return Career::orderBy('id', 'DESC')->paginate(10);
    }

    public function getById($id)
    {
        return Career::findOrFail($id);
    }

    // public function create(array $data)
    // {
    //     return Career::create($data);
    // }

    public function create( $data )
    {

        $career = new Career();
        $career->category_id = $data['category_id'];
        $career->subcategory = $data['subcategory'];
        $career->location = $data['location'];
        $career->educational_background = $data['educational_background'];
        // Upload and store image securely
        
        $career->save();
        return $career;
    }

    public function update($id, array $data)
    {
        $career = Career::findOrFail($id);
        $career->update($data);
        return $career;
    }

    public function delete($id)
    {
        return Career::destroy($id);
    }
}
