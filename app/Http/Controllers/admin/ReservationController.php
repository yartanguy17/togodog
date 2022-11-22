<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Toilettag;

class ReservationController extends Controller
{
    public function index(){
        $reservations = Toilettag::all();

        return view(('admin.reservation.index'),compact('reservations'));
    }
}
