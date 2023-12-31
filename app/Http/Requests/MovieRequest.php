<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title_en' => 'required',
            'title_ka' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
        ];
    }
}
