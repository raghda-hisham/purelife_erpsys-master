<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Effect extends Model
{
    use HasFactory;
    public function employee()
    {
        return $this-> hasMany(Employee::class);
    }
    public function salary()
    {
        return $this->belongsTo(Salary::class);
    }
}
