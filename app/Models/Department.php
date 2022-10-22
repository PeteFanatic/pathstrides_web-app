<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public $incrementing = false;
    
    protected $table = 'departments';
    protected $primaryKey = 'dep_id';
    protected $guarded = []; 
    public static function getDepartment($departmentID){
        return self::where('dep_coll',$departmentID)->get()->toArray();
    }
    
}
