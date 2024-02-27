<?php

namespace Modules\Newspaper\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Modules\Newspaper\Models\Category;

class CategoryController extends Controller
{
    public function index(): Collection
    {
        return Category::all();
    }
}