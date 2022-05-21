<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacations_balance extends Model
{
    use HasFactory;
    protected $fillable = [

        'vacations_balances',
        'start_date',
        'current_balances', 
    ];
    public function employee()
    { 
        return $this->belongsTo(Employee::class);
    }
}
