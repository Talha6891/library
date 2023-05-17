<?php

namespace App\Rules;

use App\Models\Student;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UniqueStudent implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Check if the student already exists
        $student = Student::where('session', $value['session'])
            ->where('semester', $value['semester'])
            ->where('roll_no', $value['roll_no'])
            ->first();

        if ($student) {
            // The student already exists, so fail the validation
            $fail('The student already exists.');
            return;
        }
    }
}
