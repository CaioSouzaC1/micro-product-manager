<?php

namespace App\Http\Requests\Product;

use App\Helpers\Product\NameRuleHelper;
use App\Traits\BasicFormRequestValidation;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    use BasicFormRequestValidation;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => NameRuleHelper::rule()
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => NameRuleHelper::attribute()
        ];
    }
}
