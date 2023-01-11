<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders=Order::orderBy('id','DESC')->paginate(100);
        return view('admin.orders.index')->with('orders',$orders);
    }
}
