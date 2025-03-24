<?php

namespace App\Repositories\Interfaces;
use Illuminate\Http\Request;

interface NewsLetterRepositoryInterface
{
    public function getAllNewsletters();
    public function getNewsletterById($id);
    public function getCategoriesByType(string $type);
    public function createNewsletter(array $data, Request $request);
    public function updateNewsletter($id, array $data, Request $request);
    public function deleteNewsletter($id);
}
