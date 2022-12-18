<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Toilettag;
use App\Models\Banner;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;



class HomeController extends Controller
{
    public function index(){

        $banners = Banner::where('status','active')->orderBy('id','desc')->limit(4)->get();
        $product_lasts = Product::where('status','active')->orderBy('id','desc')->limit(12)->get();
        $product_firsts = Product::where('status','active')->orderBy('id','desc')->limit(80)->get();

        return view('website.pages.index',compact('banners','product_lasts','product_firsts'));
    }
    public function toillettag(){

        return view('website.pages.toilettage');
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
        $sum_cart = session()->get('sum_cart');
        // $cart = [];
        if(!array_key_exists($request->id, $cart)) $cart[$request->id] = 0;
        $cart[$request->id] = intval($cart[$request->id]) + intval($request->qty)+ intval($request->price);

        $sum_cart= array_sum($cart);

        $request->session()->put('cart', $cart);
        $request->session()->put('sum_cart', $sum_cart);

        $total=0;

        foreach($cart as $key => $item){

            dd($item);

        }

        return response()->json(['cart_data' => $cart, 'count' => array_sum($cart)]);
    }
}
