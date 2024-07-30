<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StateVideosRequest extends FormRequest
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'youTube_url' => 'nullable|string|max:255',
            'state_id' => 'nullable|exists:states,id',
        ];
    }
}
