<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBorrowRequest extends FormRequest
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
            'roll_no' => 'required|int|min:1',
            'session' => 'required|string',
            'semester' => 'required|int|min:1',
            'ISBN' => 'required|string',
            'issue_date' => 'required|date',
            'return_due_date' => 'required|date|after:issue_date'
        ];
    }
}
