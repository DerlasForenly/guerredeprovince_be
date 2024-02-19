<?php

namespace Modules\Country\Http\Requests\Law;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int law_type_id
 * @property \Illuminate\Database\Eloquent\Casts\Json meta
 */
class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'law_type_id' => 'required|int|min:1',
            'meta'        => 'required|json',
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