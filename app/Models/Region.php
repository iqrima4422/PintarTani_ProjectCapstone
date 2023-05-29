<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'region';
    protected $primarykey = 'id';

    //one to many from region to transaksi
    public function transaksi(){
    	return $this->hasMany('App\Models\Transaksi' , 'region_id');
    }

}
