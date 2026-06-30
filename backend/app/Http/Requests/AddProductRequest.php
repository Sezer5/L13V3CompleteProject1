<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'name'      => 'required|string|max:255',
            'desc'      => 'nullable|string',
            'qty'       => 'required|integer|min:0',
            'price'     => 'required|decimal:0,2|min:0', // 10,2 formatı için
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048', // 2MB limit
        ];
    }
}
