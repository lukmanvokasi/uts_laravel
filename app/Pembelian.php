<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = "pembelian";
    protected $fillable = [
    	"id_barang",
    	"banyak"
    	
    ];
}
