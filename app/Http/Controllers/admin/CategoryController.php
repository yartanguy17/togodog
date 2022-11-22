<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

        $categorys=Category::where('status',1)->get();

        return view('admin.category.index',compact('categorys'));


    }
    public function show(){

    }
    public function edite(){

    }
    public function add(){

        return view('admin.category.create');

    }
    public function save(Request $request){

        // return view('admin.category.create');

        $rules = [
            'categorie_name' => 'required',
            'status' => 'required'

        ];

        $messages = array(
            'categorie_name.required' => 'Nom est obligatoire.',
            'status.required' => 'Status est obligatoire.',
        );

        $validator = Validator::make($request->all(), $rules, $messages);

        // dd($request->input('categorie_name'));
        $categorie = new Category();
        $categorie->title = $request->input('categorie_name');
        $categorie->status = $request->input('status');
        $categorie->added_by = 1;


        if ($validator->fails()) {

            return  back()->with('error', $validator->errors()->first());
        }

        // dd($categorie);
        $categorie->save();


        return back()->with("info", "La Catégorie $categorie->categorie_name  a été ajoutée avec succès.");


    }
}
