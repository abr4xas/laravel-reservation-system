<?php

namespace App\Http\Requests\Activities;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ActivitiesRequest extends FormRequest
{
    /** Determine if the user is authorized to make this request. */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|min:10|required',
            'slug' => 'string|required',
            'description' => 'string|required',
            'price' => 'integer|numeric|required',
        ];
    }
}
