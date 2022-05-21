<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Resources\Employees;
use App\Models\Position;
use App\Models\Department;

use App\Http\Requests\EmployeeFormRequest;
use App\Http\Requests\UpdateEmployeeFormRequest;



class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::get();

        return Employees::collection ($employees);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeFormRequest $request)
    {
        // dd($request->all());
        $employee = Employee::create([
            'name'               =>$request->name,
            'phone'              =>$request->phone,
            'hiring_date'        =>$request->hiring_date,
            'insurance_code'     =>$request->insurance_code,
            'insurance_value'    =>$request->insurance_value,
            'insurance_start'    =>$request->insurance_start,
            'insurance_end'      =>$request->insurance_end,
            'med_insurance_start'=>$request->insurance_start,
            'med_insurance_end'  =>$request->insurance_end,
            'work_hours'         =>$request->work_hours,
            'shift'              =>$request->shift,
            'gender'             =>$request->gender,
            'personal_id'        =>$request->personal_id,
            'visa_num'           =>$request->visa_num,
            'retirement_date'    =>$request->retirement_date,
            'salary'             =>$request->salary,
            'papers'             =>$request->papers,
            'paper_completed'    =>$request->paper_completed,
            'birthday'           =>$request->birthday,
            'position_id'        =>$request->position_id,
            'department_id'      =>$request->department_id,
            'religion'           =>$request->religion,
            'nationality'        =>$request->nationality,
            'location_id'        =>$request->location_id,

        ]);

            //  $employee->locations()->attach(request()->location_ids);

            //  dd(request()->location_id);
        return new Employees ($employee);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return new Employees ($employee);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeFormRequest $request,$id)
    {
         $employee  = Employee::findOrfail($id);
        // return response()->json([
        //     $request->all()
        // ]);

       $employee->update([


        'name'               =>$request->name,
        'phone'              =>$request->phone,
        'hiring_date'        =>$request->hiring_date,
        'insurance_code'     =>$request->insurance_code,
        'insurance_value'    =>$request->insurance_value,
        'insurance_start'    =>$request->insurance_start,
        'insurance_end'      =>$request->insurance_end,
        'med_insurance_start'=>$request->insurance_start,
        'med_insurance_end'  =>$request->insurance_end,
        'work_hours'         =>$request->work_hours,
        'shift'              =>$request->shift,
        'gender'             =>$request->gender,
        'personal_id'        =>$request->personal_id,
        'visa_num'           =>$request->visa_num,
        'retirement_date'    =>$request->retirement_date,
        'salary'             =>$request->salary,
        'papers'             =>$request->papers,
        'paper_completed'    =>$request->paper_completed,
        'birthday'           =>$request->birthday,
        'position_id'        =>$request->position_id,
        'department_id'      =>$request->department_id,
        'religion'           =>$request->religion,
        'nationality'        =>$request->nationality,
        'location_id'        =>$request->location_id,

        ]);

            //  $employee->locations()->sync($request->location_ids);

        return new Employees ($employee);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee  = Employee::findOrfail($id);
        $employee->delete();
        return 'employee deleted successfully';
    }
}
