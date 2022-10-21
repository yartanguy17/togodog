<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){

        return view('admin.sub_category.index');


    }
    public function show(){

    }
    public function edite(){

    }
    public function add(){

        return view('admin.sub_category.create');

    }
}
