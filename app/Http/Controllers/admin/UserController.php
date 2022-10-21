<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        return view(('admin.users.index'));

    }

    public function show(){

    }

    public function edite(){

    }
    public function add(){
        return view(('admin.users.create'));
    }
}
