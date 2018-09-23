<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'photo_id' =>'required',

            '_token'=>'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'subcategory_id' => 'required'
          
        ];
    }



    public function messages()
    {
        return [
            'photo_id.required' => 'photo is required!',

            'name.required' => 'name is required!',
            'description.required' => 'description is required!',
            'price.required' => 'price is required!',

        ];
    }
}

