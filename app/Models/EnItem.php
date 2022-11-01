<?php
namespace App\Models;
use Encore\Admin\Traits\DefaultDateTimeFormat;
use Illuminate\Database\Eloquent\Model;

class EnItem extends Model
{
    use DefaultDateTimeFormat;
    protected $table = 'en_items'; //database table

    public function getItem()
    {
        return $this -> limit(4) -> get();
    }
    //returns 1st 4 posts in the database table
}