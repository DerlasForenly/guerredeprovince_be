<?php

namespace Modules\Request\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int type_id
 * @property int $requestable_id
 */
class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type_id'        => ['required', 'integer'],
            'requestable_id' => ['required', 'integer'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
