<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            'title' => ['sometimes', 'required', 'string'],
            'author' => ['sometimes', 'required', 'string'],
            'ISBN' => ['sometimes', 'required', 'string', 'unique:books,ISBN,' . $this->book->id],
            'publisher' => ['sometimes', 'required', 'string'],
            'publication_date' => ['nullable', 'date'],
            'genre' => ['sometimes', 'required', 'string', 'in:fiction,Non Fiction'],
            'availability' => ['sometimes', 'required', 'string', 'in:available,unavailable'],
            'description' => ['nullable', 'string'],
            'cover_image' => ['nullable', 'string'],
        ];

    }
}
