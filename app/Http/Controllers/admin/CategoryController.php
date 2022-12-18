<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\Category;

class CategoryController extends Controller
{
  public function index()
  {

    $categorys = Category::where('status', 1)->get();

    return view('admin.category.index', compact('categorys'));
  }

  public function show(Category $category)
  {
    return view('admin.category.show', compact('category'));
  }

  public function add()
  {
    return view('admin.category.create');
  }

  public function edit(Category $category)
  {
    return view('admin.category.edit', compact('category'));
  }

  public function save(Request $request)
  {

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

  public function update(Request $request, Category $category)
  {
    $rules = [
      'categorie_name' => 'required',
      'status' => 'required'
    ];

    $messages = array(
      'categorie_name.required' => 'Nom est obligatoire.',
      'status.required' => 'Status est obligatoire.',
    );

    $validator = Validator::make($request->all(), $rules, $messages);

    $category->title = $request->categorie_name;
    $category->status = $request->status;


    if ($validator->fails()) {
      return  back()->with('error', $validator->errors()->first());
    }

    $category->save();

    return redirect()
      ->route('category.show', ['category' => $category->id])
      ->with("info", "La Catégorie $category->categorie_name a été mise à jour avec succès.");
  }

  public function delete(Category $category)
  {
    $category_title = $category->title;
    $category->delete();
    return redirect()->route('category')->with("info", "La Catégorie $category_title a été supprimée avec succès.");
  }
}
