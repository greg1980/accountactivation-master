<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tellerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
                'bank' => 'required|max:255',
                'teller'=> 'required|max:30' ,
                'tel' => 'required',
                'year'=>'required',
                'amount'=> 'require|max:100',
        ];
    }
}
