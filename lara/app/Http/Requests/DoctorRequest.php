<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
            'd_nid' => 'required',
            'd_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'blood_group' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'status' => 'required',
            'duty_time' => 'required',
            'qualification' => 'required',
            'status' => 'required',
            'dob' => 'required'
        ];
    }
}
