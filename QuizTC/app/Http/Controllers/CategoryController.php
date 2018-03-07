<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    
    public function read(){
    	$data = Category::all();
    	return $data;    	
    }

    public function create(Request $request){
    	$data = ['name' => $request->name];	
    	Category::create($data);
        if($data == 1){
            return "success"
        }
        else{
            echo "Failed to Create. Please Fill All the Columns!"
        }
    }

    public function update(Request $request){
    	
    	$data = Category::where('id', $request->id)->update(['name' => $request->name
    	]);

        if($data == 1){
            return $data
        }
        else{
            echo "Failed to Update. Please Fill All the Blanks!"
        }
    }
    
    public function delete(Request $request){
    	$data = Category::where('id',$request->id)->delete();
        if($data == 1){
            return $data
        }
        else{
            echo "Failed to Delete. Make Sure to fill the right ID!"
        }
  	 	
    } 

 	public function readById(Request $request){
    	$data = Category::with('JSONbij')->where('id', $request->id)->first();
    	return $data;
    }


}
