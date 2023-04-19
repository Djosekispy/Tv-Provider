<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
   /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */

    public function rules(): array{
    $rules = [
        'name' => ['required','max:255'],
        'address' => ['required','max:255'],
        'password' => ['required','max:20'],
        'email' => ['required','email','max:255','unique:users'],
        'phone' => ['required','max:20'],
        'bi' => ['required','max:255'],
        ];
        return $rules;
    }
}
