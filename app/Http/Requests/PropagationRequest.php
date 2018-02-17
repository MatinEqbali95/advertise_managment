<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropagationRequest extends FormRequest
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
        if ($this->method()=="POST")
            return [
                'title'=>'required',
                'description'=>'required',
                'email'=>'required|email',
                'tel'=>'required',
                'image'=>'required|mimes:jpeg,png,bmp,jpg',
                'city'=>'required',
                'category'=>'required'
            ];
        else
            return [
                'title'=>'required',
                'description'=>'required',
                'email'=>'required|email',
                'tel'=>'required',
                'city'=>'required',
                'category'=>'required'
            ];


    }
}
