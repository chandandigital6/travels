<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookTableRequest extends FormRequest
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
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'number' => 'nullable|string|max:20',
            'date_time' => 'nullable|date',
            'destination' => 'nullable|string|max:255',
            'person' => 'nullable|integer|min:1',
            'categories' => 'nullable|string|max:255',
            'msg' => 'nullable|string',
        ];
    }
}
