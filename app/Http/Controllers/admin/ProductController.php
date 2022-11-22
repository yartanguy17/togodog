<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();

        return view(('admin.product.index'),compact('products'));

    }

    public function show(){

    }

    public function edite(){

    }
    public function add(){
        $categorys = Category::all();
        // dd($categorys);
        return view(('admin.product.create'),compact('categorys'));
    }
    public function save(Request $request){
        // return view(('admin.product.create'));
        $rules = [

            'title' => 'required',
            'summary' => 'required',
            'cat_id' => 'required',
            'description' => 'nullable',
            'brand_id' => 'nullable|exists:brands,id',
            'child_cat_id' => 'nullable|exists:categories,id',
            // 'is_featured' => 'sometimes|in:1',
            'status' => 'required|in:active,inactive',
            // 'condition' => 'required|in:default,new,hot',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric'
        ];

        $messages = array(
            'boutique_id.required' => 'Boutique est obligatoire.',

            'title.required' => 'Nom est obligatoire.',
            'summary.required' => 'summary est obligatoire.',
            // 'stock.required' => 'Stock est obligatoire.',

            'cat_id.required' => 'Catégorie est obligatoire.',
            'status.required' => 'Status est obligatoire.',

        );

        $validator = Validator::make($request->all(), $rules, $messages);



        if ($validator->fails()) {

            return  back()->with('error', $validator->errors()->first());
        }

        // dd($request->all());

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
                $filename = time().'_'.$photo->getClientOriginalName();
                $destinationPath = public_path('/photos/produits');
                $photo->move($destinationPath, $filename); //Ajouter photo
                array_push($tab, $filename);
            }
        }




        // return $tab;
        $tab1 = (implode(";",$tab));
        // return (explode(";",$tab1));

        //  dd($tab);
        $product->photo = implode(";", $tab);

        $slug = Str::slug($request->title);
        $count = Product::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $product->slug = $slug;
        $product->is_featured = $request->input('is_featured', 0);

        // return $size;
        // return $data;

        $product->save();
        return  back()->with('info', 'Product Ajoutè avec Success !');
    }
}
