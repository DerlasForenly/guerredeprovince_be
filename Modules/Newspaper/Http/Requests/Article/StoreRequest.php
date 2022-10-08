<?php

namespace Modules\Newspaper\Http\Requests\Article;

use Illuminate\Http\Request;
use Modules\Newspaper\Http\Requests\Params\Article\StoreParams;

/**
 * Class StoreRequest
 */
class StoreRequest extends Request
{
    protected string $params = StoreParams::class;

    public function rules()
    {

    }
}
