<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'manager';
    protected $primaryKey = 'man_id';
    protected $guarded = [];  

    public function Manager(){

        return $this->belongsTo(Manager::class, 'admin_id', 'man_id');
        }
}
