<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKutyaRequest extends FormRequest
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
            "nev" => "required|string|max:50",
            "eletkor" => "required|integer|min:0|max:18",
            "fajta" => "required|string|max:50",
            "gazda_neve" => "required|string|max:50",
        ];
    }
}
