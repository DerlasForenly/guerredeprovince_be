<?php

namespace Modules\Action\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $time
 */
class WorkRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'time' => ['required', 'min:0', 'integer'],
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
