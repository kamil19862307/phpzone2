<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class SignUpFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:1', 'max:30'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()]
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'email' => str(request('email'))
                ->squish()
                ->lower()
                ->value()
        ]);
    }
}
