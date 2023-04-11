<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    // public $timestamps = false;
  
  
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */ 
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $fillable  = ['user_fname','user_mname','user_lname','user_email','contactnumber','user_username','user_password','user_department','role','status','emp_coll', 'user_points']; 


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $incrementing = true;
    
    public function login($password)
    {
        if (Hash::check($password, $this->password)) {
            return true;
        }
        return false;
    }

    public static function getemployee($employeeID){
        return self::where('emp_coll',$employeeID)->get()->toArray();
    }

    public function employee(){
        return $this->belongsTo(User::class, 'task_id', 'user_id');
    }
}
