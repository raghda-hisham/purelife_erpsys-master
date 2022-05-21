<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;

    protected $fillable = [

        'ins_code',
        'ins_value',
        'ins_start',
        'ins_end', 
        'med_value',
        'med_start',
        'med_end'
    ];

    public function employee()
    { 
        return $this->belongsTo(Employee::class);
    }
}
