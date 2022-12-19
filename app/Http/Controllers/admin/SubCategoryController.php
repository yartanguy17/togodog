<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
  public function index()
  {
    $subCategories = SubCategory::where('status', 'ENABLE')->get();
    return view('admin.sub_category.index', compact('subCategories'));
  }

  public function show(SubCategory $subCategory)
  {
    return view('admin.sub_category.show', compact('subCategory'));
  }

  public function add()
  {
    return view('admin.sub_category.create');
  }

  public function edit(SubCategory $subCategory)
  {
    return view('admin.sub_category.edit', compact('subCategory'));
  }

  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required',
      'status' => 'required|in:active,inactive',
      'parent_id' => 'required,integer'
    ]);

    SubCategory::create([
      'title' => $request->title,
      'summary' => $request->summary,
      'parent_id' => $request->parent_id,
      'status' => $request->status,
    ]);

    return redirect()->route('subcategory')->with("info", "La sous-catégorie $request->title a été ajoutée avec succès.");
  }

  public function update(Request $request, SubCategory $subCategory)
  {
    $request->validate([
      'title' => 'required',
      'status' => 'required|in:active,inactive',
      'parent_id' => 'required,integer'
    ]);

    $subCategory->update([
      'title' => $request->title,
      'summary' => $request->summary,
      'parent_id' => $request->parent_id,
      'status' => $request->status,
    ]);

    return back()->with("info", "La sous-categorie $request->title a été mise à jour avec succès.");
  }
  
  public function destroy(SubCategory $subCategory)
  {
    $subCategory_title = $subCategory->title;
    $subCategory->delete();
    return redirect()->route('subcategory')->with("info", "La sous-categorie $subCategory_title a été supprimée avec succès.");
  }
}
