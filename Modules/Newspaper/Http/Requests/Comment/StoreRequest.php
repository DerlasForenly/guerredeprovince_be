<?php

namespace Modules\Newspaper\Http\Requests\Comment;

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
            'content' => ['required', 'string', 'min:3', 'max:300']
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'content.required' => 'lol, man',
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
