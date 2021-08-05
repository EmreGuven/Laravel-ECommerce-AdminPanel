<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function CategoryView(){

    	$category = Category::latest()->get();
    	return view('backend.category.category_view',compact('category'));
    }

    public function CategoryStore(Request $request){

       $request->validate([
    		'category_name' => 'required',
    		'category_icon' => 'required',
    	],[
    		'category_name.required' => 'Input Category Name',
    	]);

    	 

	Category::insert([
		'category_name' => $request->category_name,
		'category_slug' => strtolower(str_replace(' ', '-',$request->category_name)),
		'category_icon' => $request->category_icon,

    	]);

	    $notification = array(
			'message' => 'Category Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method 


    public function CategoryEdit($id){
    	$category = Category::findOrFail($id);
    	return view('backend.category.category_edit',compact('category'));

    }


    public function CategoryUpdate(Request $request){

    	$cat_id = $request->id;

      Category::findOrFail($cat_id)->update([
		'category_name' => $request->category_name,
		'category_slug' => strtolower(str_replace(' ', '-',$request->category_name)),
		'category_icon' => $request->category_icon,

    	]);

	    $notification = array(
			'message' => 'Category Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('all.category')->with($notification);


    } // end method


    public function CategoryDelete($id){

    	Category::findOrFail($id)->delete();

    	$notification = array(
			'message' => 'Category Deleted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method 


}
 