<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class QuoteRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'quote' => 'required',
            'movie_id' => ['required', Rule::exists('movies', 'id')],
            'thumbnail' => 'required|image'
        ];
    }

    public function messages()
    {
        return [
            'quote.required' => 'The quote field is required.',
            'movie_id.required' => 'The movie field is required.',
            'movie_id.exists' => 'The selected movie is invalid.',
            'thumbnail.required' => 'The thumbnail field is required.',
            'thumbnail.image' => 'The thumbnail must be an image.',
        ];
    }
}
