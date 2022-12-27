<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Crypt;

class ShopController extends Controller
{
    public function index(){

        $products=Product::all();
        return view('website.pages.shop',compact('products'));
    }
    public function shopByCategory($id){

        $ID = Crypt::decrypt($id);
        $products=Product::where('cat_id',$ID)->get();
        $category=Category::where('id',$ID)->get();
        // dd($category);
        return view('website.pages.shop-category',compact('products','category'));
    }
}
