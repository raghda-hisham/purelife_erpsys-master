<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'phone',
        'hiring_date',
        'insurance_code',
        'insurance_value',
        'insurance_start',
        'insurance_end',
        'med_insurance_start',
        'med_insurance_end',
        'work_hours',
        'shift',
        'gender',
        'personal_id',
        'visa_num',
        'retirement_date',
        'salary',
        'papers',
        'paper_completed',
        'birthday',
        'position_id',
        'department_id',
        'location_id',
        'nationality',


    ];
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function salary()
    {
        return $this->hasMany(Salary::class);
    }
    public function holiday()
    {
        return $this->hasMany(Holiday::class);
    }
    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
    public function insurances()
    {
        return $this->hasMany(Insurance::class);
    } public function Vacations_balances()
    {
        return $this->hasMany(Vacations_balance::class);
    }
}
