<?php

namespace Modules\Newspaper\Http\Requests\Article;

class UpdateRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return false;
    }
}
