<?php

namespace Modules\Newspaper\Http\Requests\Newspaper;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * @return \string[][]
     */
    public function rules(): array
    {
        return [
            'name'        => ['required', 'max:50', 'min:4', 'string'],
            'description' => ['required', 'max:500', 'min:10', 'string'],
            'avatar'      => ['required'],
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
