<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    
    public function read(){
    	$data = Category::all();
    	echo $data;    	
    }

    public function create(Request $request){
    	$data = ['name' => $request->name];	
    	Category::create($data);
    	return $data;
    }

    public function update(Request $request){
    	
    	$data = Category::where('id', $request->id)->update(['name' => $request->name
    	]);

    	return $data;
    }
    
    public function delete(Request $request){
    	$data = Category::where('id',$request->id)->delete();
    	return $data;
  	 	
    } 

 	public function readById(Request $request){
    	$data = Category::with('JSONbij')->where('id', $request->id)->first();
    	return $data;
    }


}
