<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Food;
use Illuminate\Support\Facades\Crypt;

class ProductController extends Controller
{
    public function index($id){
        $ID = Crypt::decrypt($id);
        $product=Product::findOrFail($ID);
        $product_by_category=Product::where('cat_id',$product->cat_id)->get();
        // dd($product_by_category);
        return view('website.pages.product-detail',compact('product','product_by_category')) ;
    }
    public function getAlimentation(){

        $foods = Food::get();

        // dd($food);

        return view('website.pages.alimentation',compact('foods'));
    }


}
