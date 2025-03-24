<?php

namespace App\Repositories\Interfaces;
use Illuminate\Http\Request;

interface PodcastRepositoryInterface
{
    public function getAllPodcasts();
    public function getPodcastById($id);
    public function createPodcast(array $data, Request $request);
    public function updatePodcast($id, array $data, Request $request);
    public function deletePodcast($id);
    public function getCategoriesByType(string $type);
}
