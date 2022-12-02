<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuteRequest extends FormRequest
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
            //  $table->string('jurusan', 100);
            // $table->string('rute_pergi', 100);
            // $table->string('rute_pulang', 100);
            'jurusan'=>'required',
            'rute_pergi'=>'required',
            'rute_pulang'=>'required'
        ];
    }
}
