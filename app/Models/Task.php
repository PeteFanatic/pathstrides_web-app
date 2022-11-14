<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public $incrementing = true;
    protected $table = 'task';
    protected $primaryKey = 'task_id';
    protected $guarded = [];
    
    public function getEmployeeTask(){
        return $this->get();
    }
}
