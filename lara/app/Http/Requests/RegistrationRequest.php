<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'sellerName' => 'required|regex:/[a-zA-Z\s]+/|max:30',
            'id' => 'required|numeric|digits:5',
            'password' => 'required|min:6',
            'cpassword' => 'required_with:password|same:password|min:6',
            'email' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'gender' => 'required|string|in:Male,Female,Others',
            'type' => 'required|not_in:0',
            'phone' => 'required|numeric|digits:11',
            'dob' => 'required',
        ];
    }
}
