<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeFormRequest extends BaseFormRequest
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

             'name'       =>'required|string' ,
             'phone'      =>'required|string'  ,
             'hiring_date'=>'required|date'    ,
             'work_hours' =>'required'         ,
             'shift'      =>'required|string'  ,
             'gender'     =>'required|string'  ,
             'personal_id'=>'required|string|size:14' ,
             'visa_num'   =>'string|size:16'   ,
               
        ];
    }
}
