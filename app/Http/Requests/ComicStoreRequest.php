<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicStoreRequest extends FormRequest
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
            'title' => 'required|min:3|max:255|',
            'thumb' => 'required|max:255',
            'series' => 'required|min:10|max:200',
            'price' => 'nullable|max:15',
            'sale_date' => 'nullable|max:25',
            'description' => 'nullable'
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'A title is required',
            'thumb.required' => 'An image is required',
            'series.required' => 'We need to know the series of the comic',
        ];
    }
}
