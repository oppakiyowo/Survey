<?php

namespace App\Http\Requests\village;

use Illuminate\Foundation\Http\FormRequest;

class CreateVillagesRequest extends FormRequest
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
            'name' => 'required|max:30|unique:villages',
            'code' => 'required|numeric|between:0,999999',
            'total_penduduk' => 'required|integer'

        ];
    }
}
