<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    public function itemByOrder($id){
        return OrderItem::where('order_id',$id)->get();
    }
    public function itemByProduct(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
