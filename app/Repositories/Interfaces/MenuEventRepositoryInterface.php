<?php

namespace App\Repositories\Interfaces;


use Illuminate\Http\Request;

interface MenuEventRepositoryInterface
{
    public function getAllEvents();
    public function getEventById($id);
    public function getCategoriesByType(string $type);
    public function createEvent(array $data, Request $request);
    public function updateEvent($id, array $data, Request $request);
    public function deleteEvent($id);
}
