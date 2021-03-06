<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    protected $fillable = [

        'name', 'num'

    ];
    public function location()
    {
        return $this->hasMany(Location::class);
    }
    
    // public function employee()
    // {
    //     return $this->hasMany(Employee::class);
    // } 
}
