<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationDataRequest extends FormRequest
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
            
                'fname' => 'required|max:255',
                'year_of_call' => 'required|max:255',
                'address'=> 'required|max:255' ,
                'lname'=> 'nullable|max:255',
                'branch' => 'required|max:70',
                'company' => 'required|max:155',
                'position'=> 'required|max:50',
                'committee' => 'required|max:100',
                'addCommittee' => 'required|max:255',

        ];
    }
}
