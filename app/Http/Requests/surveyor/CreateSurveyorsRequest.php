<?php

namespace App\Http\Requests\surveyor;

use Illuminate\Foundation\Http\FormRequest;

class CreateSurveyorsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:30|',
            'kontak' => 'required|integer|unique:surveyors',
        ];
    }
}
