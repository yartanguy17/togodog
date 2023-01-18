<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\{Category, Product};
use Illuminate\Support\Str;

class ProductController extends Controller
{
  public function index()
  {
    $products = Product::all();

    return view(('admin.product.index'), compact('products'));
  }

  public function show(Product $product)
  {
    // dd($product);
    return view('admin.product.show', compact('product'));
  }

  public function edit(Product $product)
  {
    $categories = Category::all();
    return view('admin.sub_category.edite', compact('product'));
  }

  public function add()
  {
    $categorys = Category::all();
    return view(('admin.product.create'), compact('categorys'));
  }

  public function save(ProductRequest $request)
  {
    $product = new Product();

    $product->title = $request->input('title');
    $product->summary = $request->input('summary');
    $product->description = $request->input('description');
    $product->stock = $request->input('stock');
    $product->cat_id = $request->input('cat_id');
    $product->child_cat_id = $request->input('child_cat_id');
    $product->is_featured = $request->input('is_featured');
    $product->status = $request->input('status');
    $product->condition = $request->input('condition');
    $product->price = $request->input('price');
    $product->discount = $request->input('discount');
    // togodog.easycarrental.tg

    $files = [];
    $tab = [];

    if ($request->hasfile('photo')) {

      $allowedfileExtension = ['jpg', 'png', 'jpeg', 'svg'];

      $files = $request->file('photo');

      foreach ($files as $photo) {
        $filename = time() . '_' . $photo->getClientOriginalName();
        $destinationPath = public_path('/photos/produits');
        $photo->move($destinationPath, $filename); //Ajouter photo
        array_push($tab, $filename);
      }
    }

    $product->photo = implode(";", $tab);
    $filesv = [];
    $tabv = [];

    if ($request->hasfile('video')) {

      $allowedfileExtension = ['jpg', 'png', 'jpeg', 'svg'];

      $filesv = $request->file('photo');

      foreach ($files as $photo) {
        $filename = time() . '_' . $photo->getClientOriginalName();
        $destinationPath = public_path('/photos/video');
        $photo->move($destinationPath, $filename); //Ajouter photo
        array_push($tab, $filename);
      }
    }

    $product->video = implode(";", $tabv);

    $slug = Str::slug($request->title);
    $count = Product::where('slug', $slug)->count();
    if ($count > 0) {
      $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
    }
    $product->slug = $slug;
    $product->is_featured = $request->input('is_featured', 0);

    $product->save();
    return  back()->with('info', 'Product Ajoutè avec Success !');
  }

  public function update(ProductRequest $request, Product $product)
  {
    $product->title = $request->input('title');
    $product->summary = $request->input('summary');
    $product->description = $request->input('description');
    $product->stock = $request->input('stock');
    $product->cat_id = $request->input('cat_id');
    $product->child_cat_id = $request->input('child_cat_id');
    $product->is_featured = $request->input('is_featured');
    $product->status = $request->input('status');
    $product->condition = $request->input('condition');
    $product->price = $request->input('price');
    $product->discount = $request->input('discount');

    $files = [];
    $tab = [];

    // Logique à affiner en cas de changement de photo
    if ($request->hasfile('photo')) {

      $allowedfileExtension = ['jpg', 'png', 'jpeg', 'svg'];

      $files = $request->file('photo');

      foreach ($files as $photo) {
        $filename = time() . '_' . $photo->getClientOriginalName();
        $destinationPath = public_path('/photos/produits');
        $photo->move($destinationPath, $filename); //Ajouter photo
        array_push($tab, $filename);
      }
    }

    $product->photo = implode(";", $tab);

    $slug = Str::slug($request->title);
    $count = Product::where('slug', $slug)->count();
    if ($count > 0) {
      $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
    }
    $product->slug = $slug;
    $product->is_featured = $request->input('is_featured', 0);

    $product->save();

    return  back()->with('info', "Produit $product->title modifié avec Success !");
  }

  public function destroy(Product $product)
  {
    $product_title = $product->title;
    $product->delete();
    return redirect()->route('products')->with("info", "La bannière $product_title a été supprimé avec succès.");
  }
}
