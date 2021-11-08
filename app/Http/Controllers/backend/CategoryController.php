<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
class CategoryController extends Controller
{
   public function index(){
      
   $categories= Category::orderBy('id', 'desc') ->get();
  
   return view('admin.pages.categories.index')->with('categories' , $categories);
   }

   public function create(){
      $main_categories= Category::orderBy('name', 'desc') ->where('parent_id' , NULL)->get();
      return view ('admin.pages.categories.create')->with('main_categories' , $main_categories);;
  }

}
