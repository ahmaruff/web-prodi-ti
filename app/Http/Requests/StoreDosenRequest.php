<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDosenRequest extends FormRequest
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
            "nama" => ['required', 'string'],
            'nidn' => ['nullable', 'string'],
            'email' => ['required' , 'email'],
            'jabatan_struktural' => ['nullable', 'string'],
            'jabatan_akademik' => ['nullable', 'string'],
            'image' => ['required', 'image'],
            'homebase' => ['nullable', 'string']
        ];
    }
}
