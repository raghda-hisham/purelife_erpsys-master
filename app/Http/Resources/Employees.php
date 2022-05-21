<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Locations;
use App\Http\Resources\Departments;
use App\Http\Resources\Positions;



class Employees extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'                 => $this->id,
            'name'               => $this->name,
            'phone'              => $this->phone,
            'birthday'           => $this->birthday,
            'hiring_date'        => $this->hiring_date,
            'insurance_code'     => $this->insurance_code,
            'insurance_value'    => $this->insurance_value,
            'insurance_start'    => $this->insurance_start,
            'insurance_end'      => $this->insurance_end,
            'med_insurance_start'=> $this->med_insurance_start,
            'med_insurance_end'  => $this->med_insurance_end,
            'work_hours'         => $this->work_hours,
            'shift'              => $this->shift,
            'gender'             => $this->gender,
            'personal_id'        => $this->personal_id,
            'visa_num'           => $this->visa_num,
            'retirement_date'    => $this->retirement_date,
            'salary'             => $this->salary,
            'papers'             => $this->papers,
            'paper_completed'    => $this->paper_completed,
            'department'         => new Departments($this->department),
            'position'           => new Positions($this->position),
            'location'           => new Locations($this->location),
            'nationality'        => $this->nationality,
            'created_at'         => $this->created_at,
            'updated_at'         => $this->updated_at,
        ];

        }
}
