<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    public function index()
    {
      $foods = Food::all();

      return view(('admin.food.index'), compact('foods'));
    }
    public function create()
    {
      return view(('admin.food.create'));
    }

    public function save(Request $request)
  {
    $food = new Food();

    $food->title = $request->input('title');
    $food->litre = $request->input('litre');
    $food->description = $request->input('summary');
    $food->stock = $request->input('stock');
    $food->poids = $request->input('poids');
    $food->status = $request->input('status');
    // $food->condition = $request->input('condition');
    $food->price = $request->input('price');
    // $food->discount = $request->input('discount');
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

    $food->photo = implode(";", $tab);

    $food->save();
    return  back()->with('info', 'Product Ajoutè avec Success !');
  }
}
