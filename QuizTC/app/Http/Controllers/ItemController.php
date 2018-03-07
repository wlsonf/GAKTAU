<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
class ItemController extends Controller
{
    public function read(){
    	$data = item::all();
    	return $data;
    }

    public function create(Request $request){
    	$data = [
    		'category_id' => $request->category_id,
    		'name' => $request->name,
    		'price' => $request->price,
    		'stock' => $request->stock,
    	];	
    	item::create($newData);
    	return $data;
    }

          public function read(){
    	$data = item::all();
    	return $data;
    }

    public function update(Request $request){
    	
    	$data = item::where('id', $request->id)->update([
    		'category_id' => $request->category_id,
    		'name' => $request->name,    		
    		'price' => $request->price,
    		'stock' => $request->stock,
    	]
    	);
    	return $data;
    }


    public function delete(Request $request){
    	$data = item::where('id',$request->id)->delete();
   	 	return $data;
    }
    
}
