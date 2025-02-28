<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;
use App\Models\MenuBlog;

interface MenuBlogRepositoryInterface
{
    public function getAllBlogs();
    public function getBlogById($id): MenuBlog;
    public function getCategoriesByType(string $type);
    public function createBlog(array $data, Request $request): MenuBlog;
    public function updateBlog($id, array $data, Request $request): MenuBlog;
    public function deleteBlog($id): bool;
}
