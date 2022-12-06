<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $table = 'redeem_shop';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function getRedeemShop(){
        return $this->get();
    }
}
