<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class chisorequest extends FormRequest
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
            'height'=>'required|max:3|numeric',
            'weight'=>'required|numeric',
            'age'=>'required|min:0|numeric'
        ];
    }
    public function messages()
    {
        return [
           'required'     =>':attribute không được để trống',
           'numeric'       =>':attribute đã nhập sai định dạng',
           'max'            =>':attribute quá giới hạn',
           'min'            =>':attribute phai lon hon hoac bang 0',
        ];
    }
    public function attributes()
    {
        return [
            'height' =>'Height',
            'weight'=>'Weight',
            'age'=>'age',
        ];
    }
}
