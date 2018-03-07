<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $table = 'Categorirs';

   	protected $fillable = ['id' , 'name']; 

	public function JSONbij()
    {
    	
    	return $this->hasMany('App\Item');
    }
   
}