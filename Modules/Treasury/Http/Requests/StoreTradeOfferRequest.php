<?php

namespace Modules\Treasury\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $quantity
 * @property int $price
 * @property int $resource_id
 * @property bool $is_buying
 */
class StoreTradeOfferRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'quantity'    => 'required|int|min:1',
            'price'       => 'required|int|min:0',
            'resource_id' => 'required|int|exists:resources,id',
            'is_buying'   => 'required|bool',
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