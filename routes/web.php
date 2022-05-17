<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use Staudenmeir\LaravelAdjacencyList\Eloquent\Builder;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/category/{category:title}',[CategoryController::class,'index'])->name('cat.name');
Route::get('/', function () {

    $categories = Category::tree()->get()->toTree();

    
/*
        this gets all posts of the choosen category and its children
*/
   
/*
        Show Categories to add that are not null and is unique
*/
    $catList = Category::get();
    
    // $list = $catList->filter(function ($value, $key) {
    //         return $value->parent_id != null;
    //     });

        // $list = $list->unique('parent_id')->sortBy('parent_id');



  


    return view('welcome',['categories'=>$categories,'catList'=>$catList]);
});


