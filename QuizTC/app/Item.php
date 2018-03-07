<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	public $timestamps = false;

    protected $table = 'Items';

   	protected $fillable = ['id' , 'category_id', 'name' , 'price' , 'stock'];

   	
}