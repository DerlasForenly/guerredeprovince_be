<?php

namespace Modules\Newspaper\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Newspaper\Http\Requests\Params\Article\StoreParams;

/**
 * Class StoreRequest
 */
class StoreRequest extends FormRequest
{
    /**
     * @var string
     */
    protected string $params = StoreParams::class;

    /**
     * @return \string[][]
     */
    public function rules(): array
    {
        return [
            'title'        => ['required', 'max:50', 'min:4', 'string'],
            'content'      => ['required', 'max:10000', 'min:25', 'string'],
            'newspaper_id' => ['nullable'],
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'title.required' => 'lol, man',
            'content.required' => 'shit, man',
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
