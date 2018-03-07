<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
class ItemController extends Controller
{
    public function create(Request $request){
    	$data = [
    		'category_id' => $request->category_id,
    		'name' => $request->name,
    		'price' => $request->price,
    		'stock' => $request->stock,
    	];	
    	item::create($data);
    	if($data == 1){
            return "success"
        }
        else{
            echo "Failed to Create. Please Fill All the Columns!"
        }
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
    	]);
        // $data->save();
        if($data == 1){
            return $data
        }
        else{
            echo "Failed to Update. Please Fill All the Blanks!"
        }
    }


    public function delete(Request $request){
    	$data = item::where('id',$request->id)->delete();
        if($data == 1){
            return $data
        }
        else{
            echo "Failed to Delete. Make Sure to fill the right ID!"
        }
    }
    
}
