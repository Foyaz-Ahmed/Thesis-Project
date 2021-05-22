<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'catagory_Id' => 'required|digits:5', 
            'brand_id' => 'required|digits:5', 
            'title' => 'required',
            'description' => 'required',
            'status' => 'required|digits_between:0,1',
            'price' => 'required|digits_between:2,5',
            'quantity' => 'required',
            'offer_price' => 'required',
        ];
    }
}
