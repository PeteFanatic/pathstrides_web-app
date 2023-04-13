<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskReport extends Model
{
    use HasFactory;

    public $incrementing = true;
    public $timestamps = false;
    protected $table = 'task_report';
    protected $primaryKey = 'task_report_id';
}
