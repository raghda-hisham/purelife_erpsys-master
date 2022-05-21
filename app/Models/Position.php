<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [

        'pos_code',
        'pos_value',
         
    ];

    public function employee()
    { 
        return $this->hasMany(Employee::class);
    }
}
