<?php

namespace App\Http\Requests\survey;

use Illuminate\Foundation\Http\FormRequest;

class CreateSurveyRequest extends FormRequest
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
            'village' => 'required',
            'surveyor'=>'required',
            'rt'=>'required|numeric',
            'pindah'=>'nullable|numeric',
            'ganda'=>'nullable|numeric',
            'meninggal'=>'nullable|numeric',
            'tidak_diketahui'=>'nullable|numeric',
            'rw'=>'required|numeric',
            'tanggal_survey'=>'nullable',
            'penduduk_rt'=>'nullable|numeric',
            
        ];
    }
}
