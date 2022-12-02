<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TarifRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'jadwal_id' => 'required|integer|exists:jadwal,id',
            'rute_id' => 'required|integer|exists:rute,id',
            'tarif' => 'required|integer'

            //
        ];
    }
}
