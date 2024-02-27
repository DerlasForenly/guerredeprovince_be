<?php

namespace Modules\Country\Http\Controllers\Law;

use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Modules\Country\Http\Filters\LawFilter;
use Modules\Country\Http\Resources\LawResource;
use Modules\Country\Models\Law;

class IndexController extends Controller
{
    public function __invoke(LawFilter $filter): AnonymousResourceCollection
    {
        return LawResource::collection(Law::filter($filter)->get());
    }
}