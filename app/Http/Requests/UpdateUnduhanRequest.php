<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUnduhanRequest extends FormRequest
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
            'judul' => ['required', 'string'],
            'deskripsi' => ['nullable', 'string'],
            'is_link' => ['nullable', 'boolean'],
            'path' => ['nullable'],
        ];
    }

    protected function prepareForValidation()
    {
        if(isset($this['jenis_dokumen'])){
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
        } else {
            $this->request->remove('jenis_dokumen');
            $this->request->remove('file');
            $this->request->remove('link');
        }
    }
}
