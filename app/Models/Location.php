<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [

        'name', 'num', 'sector_id'

    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
