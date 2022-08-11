<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\Employee as Authenticatable;
class Employee extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'employee';
    protected $primaryKey = 'emp_id';
    protected $guarded = [];  

    public static function getEmployee($employeeID){
        return self::where('emp_coll',$employeeID)->get()->toArray();
    }
}
