<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Toilettag;
use App\Models\Banner;
use App\Models\Video;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;



class HomeController extends Controller
{
    public function index(){

        $banners = Banner::where('status','active')->orderBy('id','desc')->limit(4)->get();
        $product_lasts = Product::where('status','active')->orderBy('id','desc')->limit(12)->get();
        $product_firsts = Product::where('status','active')->orderBy('id','desc')->limit(80)->get();
        $videos = Video::all();

        // dd($videos);

        return view('website.pages.index',compact('banners','product_lasts','product_firsts','videos'));
    }
    public function toillettag(){

        return view('website.pages.toilettage');
    }
    public function abut(){

        return view('website.pages.abut');
    }
    public function contact(){

        return view('website.pages.contact');
    }
    public function saveToillettag(Request $request){

        $rules = [

            'first_name' => 'required',
            'tel' => 'nullable|numeric',
            'address' => 'required',
            'date_reserve' => 'required',

            'quantity' => 'nullable|numeric'
        ];

        $messages = array(
            'first_name.required' => 'Nom est obligatoire.',
            'tel.required' => 'Télèphone est obligatoire.',
            'address.required' => 'Adresse est obligatoire.',
            'quantity.required' => 'Nombre de chient est obligatoire.',
            'date_reserve.required' => ' Date et heure de reservation est obligatoire.',


        );

        $validator = Validator::make($request->all(), $rules, $messages);

        // dd($request->all());

        if ($validator->fails()) {

            return  back()->with('error', $validator->errors()->first());
        }else{

            $reservation = new Toilettag();

            $reservation->first_name = $request->get("first_name");
            $reservation->last_name= $request->get("last_name");
            $reservation->tel= $request->get("tel");
            $reservation->email= $request->get("email");
            $reservation->address= $request->get("address");
            $reservation->quantity= $request->get("quantity");
            $reservation->date_reserve= $request->get("date_reserve");

            $reservation->save();
            return  back()->with('info', 'Reservation pris en compte !');
        }
    }

    public function putItemInSession(Request $request){

        $cart = session()->get('cart', []);
        $total = session()->get('total');

         $totals = 0;

        if(!array_key_exists($request->id, $cart)) $cart[$request->id] = 0;
        $cart[$request->id] = intval($cart[$request->id]) + intval($request->qty);


        foreach ($cart as $key => $qty){

            $product = Product::find($key);
            $totals += $product->price * $qty;
        }




        $request->session()->put('cart', $cart);
        $request->session()->put('total', $totals);

        // request()->session()->flash('success', 'Produit ajouté au panier');

        return response()->json(['cart_data' => $cart, 'count' => array_sum($cart)]);
    }
}
