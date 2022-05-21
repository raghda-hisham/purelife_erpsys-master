<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeFormRequest extends BaseFormRequest
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

             'name'       =>'string' ,
             'phone'      =>'string'  ,
             'hiring_date'=>'date'    ,
             'shift'      =>'string'  ,
             'gender'     =>'string'  ,
             'personal_id'=>'string|size:14' ,
             'visa_num'   =>'string|size:16'   ,
               
        ];
    }
}
