<?php

namespace App\Http\Requests\Auth;

use App\Traits\BasicFormRequestValidation;
use Illuminate\Foundation\Http\FormRequest;


class LoginRequest extends FormRequest
{

    use BasicFormRequestValidation;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            "email" => [
                "email",
                "required",
            ],
            "password" => [
                "string",
                "required",
                "min:6"
            ],
        ];
    }

    public function attributes(): array
    {
        return [
            "email" => "e-mail",
            "password" => "senha",
        ];
    }
}
