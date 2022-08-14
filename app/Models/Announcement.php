<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'announcement';
    protected $primaryKey = 'ann_id';
    protected $guarded = [];  

    public function getAnnouncementData(){
        return $this->get();
    }
}
