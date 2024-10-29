<?php

namespace App\Http\Requests;

use App\Rules\ReplaceSpacesWithDashes;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
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
            'user_id' => ['required', 'integer'],
            'title' => ['required', 'max:100'],
            'slug' => ['required', new ReplaceSpacesWithDashes],
            'content' => ['required'],
            'category_id' => ['required', 'integer']
        ];
    }
}
