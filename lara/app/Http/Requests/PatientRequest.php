<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            
            'id' => 'required',
            'p_nid' => 'required',
            'p_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'blood_group' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'e_contact' => 'required',
            'dob' => 'required'
        ];
    }
}
