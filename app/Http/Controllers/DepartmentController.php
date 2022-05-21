<?php

namespace App\Http\Controllers;

use App\Models\Department;
// use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Resources\Departments;
use App\Http\Requests\DepartmentFormRequest;
use App\Http\Requests\UpdateDepartmentFormRequest;



class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::get();

        
        return Departments::collection ($departments);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentFormRequest $request)
    {
        // dd($request->all());
        $department = Department::create([
            
            'name'           =>$request->name,
            'num'            =>$request->num,
        ]);

            
        return new Departments ($department);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Department::findOrFail($id);
        return new Departments ($department);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDepartmentFormRequest $request,$id)
    {
         $department  = Department::findOrfail($id);
        

       $department->update([

            'name'           =>$request->name,
            'num'          =>$request->num,
            
        ]);

        return new Departments ($department);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department  = Department::findOrfail($id);
        $department->delete();
        return 'department deleted successfully';
    }
}
