<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "first_name" => ["required", "min:3", "max:255"],
            "last_name" => ["required", "min:3", "max:255"],
            "email" => ["required", "email"],
            "phone" => ["required", "regex:/^(?:\d{1})(?:(?:\s[\d]{2}){4}|[\d]{8})$/"],
            "categories" => ["required", "array", "min:1"],
            "message" => ["required", "min:3", "max:1000"]
        ];
    }
}
