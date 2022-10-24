<?php

namespace Modules\Newspaper\Http\Requests\Params\Article;

class StoreParams
{
    public string $title;

    public string $content;

    public ?int $newspaper_id;
}
