<?php
namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
class ProductsController extends Controller
{
    public function index() 
    {
    $products = Product::orderBy('id', 'desc') ->get();
        return view('frontend.pages.product.index')->with('products', $products);
    }

    public function show($slug) 
    {
   //
    }
}
