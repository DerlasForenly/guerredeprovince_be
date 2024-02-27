<?php

namespace Modules\Resource\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Resource\Models\Resource;

class IndexController extends Controller
{
    /**
     * @return Collection
     */
    public function __invoke(): Collection
    {
        return Resource::all();
    }
}
