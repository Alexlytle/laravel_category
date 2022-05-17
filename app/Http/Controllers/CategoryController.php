<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
     

       $children = Category::find($category->id)->descendantsAndSelf;
    //    dd($children);
       $ID = array();
       $parentId = array();
       foreach ($children as $value) {
           array_push($ID,$value->id);
           array_push($parentId,$value->parent_id);
       }
    //    dd($ID);
      $posts =  DB::Table('posts')
               ->orWhereIn('category_id',$ID)
               ->orWhereIn('parent_id',$ID)
               ->get();
        // dd($posts);

        return view('singlecars',compact('posts'));
    }
}
