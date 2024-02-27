<?php

namespace Modules\Newspaper\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreRequest
 */
class StoreRequest extends FormRequest
{
    /**
     * @return \string[][]
     */
    public function rules(): array
    {
        return [
            'title'        => ['required', 'max:50', 'min:4', 'string'],
            'content'      => ['required', 'max:10000', 'min:25', 'string'],
            'newspaper_id' => ['nullable', 'integer', 'min:0'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
}
