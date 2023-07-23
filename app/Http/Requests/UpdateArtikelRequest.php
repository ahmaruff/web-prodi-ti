<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArtikelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'author' =>['required', 'string', 'max:255'],
            'image' => ['required', 'mimes:jpg,png'],
            'category' => ['required', 'string'],
            'content_html' => ['nullable', 'string'],
            'content_json' => ['nullable', 'json']
        ];
    }
}
