<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUnduhanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function messages() {
        return [
            'path.required' => 'There oss no URL or document attached to the form',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'judul' => ['required', 'string'],
            'deskripsi' => ['nullable', 'string'],
            'is_link' => ['required', 'boolean'],
            'path' => ['required'],
        ];
    }

    protected function prepareForValidation() {
        if($this['jenis_dokumen'] == 'link'){
            $this->merge(['is_link' => true, 'path' => $this['link']]);
            $this->request->remove('jenis_dokumen');
            $this->request->remove('link');
            $this->request->remove('file');
        }else if($this['jenis_dokumen'] == 'file'){
            if($this->file('file') && $this->file('file')->isValid()){
                $this->merge(['is_link' => false, 'path' => $this['file']]);
                $this->request->remove('jenis_dokumen');
                $this->request->remove('file');
                $this->request->remove('link');
            }
        }
    }

}
