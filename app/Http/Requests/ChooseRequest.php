<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChooseRequest extends FormRequest
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
            'title' => 'nullable|string|max:255',
            'heading' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'f_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'f_title' => 'nullable|string|max:255',
            'f_msg' => 'nullable|string',
            'f_1_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'f_1_title' => 'nullable|string|max:255',
            'f_1_msg' => 'nullable|string',
            'f_2_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'f_2_title' => 'nullable|string|max:255',
            'f_2_msg' => 'nullable|string',
            'f_3_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'f_3_title' => 'nullable|string|max:255',
            'f_3_msg' => 'nullable|string',
        ];
    }
}
