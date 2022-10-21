<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

        return view('admin.category.index');


    }
    public function show(){

    }
    public function edite(){

    }
    public function add(){

        return view('admin.category.create');

    }
    public function save(){

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
        $categorie->added_by = Auth()->user()->id;


        if ($validator->fails()) {

            return  back()->with('error', $validator->errors()->first());
        }

        // dd($categorie);
        $categorie->save();


        return back()->with("info", "La Catégorie $categorie->categorie_name  a été ajoutée avec succès.");


    }
}
