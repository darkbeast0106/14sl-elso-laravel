<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKutyaRequest extends FormRequest
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
            "nev" => "string|max:50",
            "eletkor" => "integer|min:0|max:18",
            "fajta" => "string|max:50",
            "gazda_neve" => "string|max:50",
        ];
    }
}
