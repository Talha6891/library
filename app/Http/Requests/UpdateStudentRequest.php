<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
            'fname' => 'required|string|max:255',
            'lname' => 'nullable|string|max:255',
            'session' => 'required|string|max:255',
            'semester' => 'required|integer|min:1|max:8',
            'roll_no' => 'required|integer|min:1',
        ];
    }
}
