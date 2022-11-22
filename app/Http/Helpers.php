<?php

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Banner;


class Helpers{
  public static  function getCategory(){
        return Category::where('status',1)->get();
    }
  public static  function getBanner(){
        return Banner::where('status','active')->orderBy('id','desc')->get()->limit(4);
    }
}
