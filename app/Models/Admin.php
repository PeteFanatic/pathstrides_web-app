<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public $incrementing = true;
    public $timestamps = false;
    protected $table = 'admin';
    protected $primaryKey = 'admin_id';

    public function getManager(){

        return $this->hasMany(Admin::class, 'user_id', 'admin_id');
        }
        // public function getAdmin(){
        //     return $this->hasOne(admin::class, 'admin_id', 'id');
        // }
}
