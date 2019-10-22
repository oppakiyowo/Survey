<?php

namespace App\Http\Requests\datasurveys;

use Illuminate\Foundation\Http\FormRequest;

class CreateDataSurveysRequest extends FormRequest
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
            'total_anomali' => 'required|max:30|',
            'total_terverifikasi' => 'required',
            'tanggal_penyerahan' => 'required',
            'image' => 'nullable',
        ];
    }
}
