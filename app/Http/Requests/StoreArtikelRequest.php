<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArtikelRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'author' =>['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:2048'],
            'category' => ['required', 'string'],
            'is_published' => ['nullable', 'string'],
            'content_html' => ['nullable', 'string'],
            'content_json' => ['nullable', 'string'],
        ];
    }
}
