<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Str;
// use InterventionImageImageManagerStatic as Image;

use Image;


class PagesController extends Controller
{
   public function index()
   {
     return view('admin.pages.index'); 
   }

   public function product_create(){
       return view('admin.pages.product.create');
   }



   public function edit_product($id){
    $product = Product::find($id);
    return view('admin.pages.product.edit')->with('product' , $product);
}


   public function manage_products(){
    $products = Product::orderBy('id', 'desc') ->get();
    return view('admin.pages.product.index')->with('products' , $products);
}

   public function product_store(Request $request){
    $validated = $request->validate([
      'title' => 'required|max:150',
      'description' => 'required',
      'price' => 'required|numeric',
      'quantity' => 'required|numeric',
      
      

  ]);





     $product = new Product ;
     $product->title = $request->title;
     $product->description = $request->description;
     $product->price = $request->price;
     $product->quantity = $request->quantity;


     $product->slug= str_slug ($product->title);
     $product->category_id=1;
     $product->brand_id=1;
     $product->admin_id=1;

     $product->save();


    //  //product image model- insert image
    //  if($request->hasFile('product_image')){

    //   // insert image 
    //   $image= $request->file('product_image');
    //   $img = time() . '.' . $image->getClientOriginalExtension();
    //   $location = public_path('images/img/' . $img);
    //   Image::make($image)->save($location);



    //   $product_image =  new ProductImage;
    //   $product_image->product_id = $product->id;
    //   $product_image->image = $img;
    //   $product_image->save();


    //  }


    if(count($request->product_image)){
      foreach($request->product_image as $image){


      // insert image 
      //$image= $request->file('product_image');
      $img = time() . '.' . $image->getClientOriginalExtension();
      $location = public_path('images/img/' . $img);
      Image::make($image)->save($location);



      $product_image =  new ProductImage;
      $product_image->product_id = $product->id;
      $product_image->image = $img;
      $product_image->save();


     

      }
    }


     return redirect()->route('admin.product.create');

    
}

  // Upadte Data 
public function product_update(Request $request , $id){
  $validated = $request->validate([
    'title' => 'required|max:150',
    'description' => 'required',
    'price' => 'required|numeric',
    'quantity' => 'required|numeric',
    
    

]);

   $product = Product::find($id) ;
   $product->title = $request->title;
   $product->description = $request->description;
   $product->price = $request->price;
   $product->quantity = $request->quantity;


   $product->save();


   return redirect()->route('admin.products');

  
}


}