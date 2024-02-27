<?php

namespace Modules\Newspaper\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class VoteRequest
 */
class VoteRequest extends FormRequest
{
    /**
     * @return \string[][]
     */
    public function rules(): array
    {
        return [
            'value' => ['required', 'numeric', 'min:-1', 'max:1']
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'value.required' => 'lol, man',
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
