<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'admin';
    protected $primaryKey = 'admin_id';

    public function getManager(){

        return $this->hasMany(Admin::class, 'man_id', 'admin_id');
        }
    
}
