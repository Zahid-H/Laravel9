<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postcontrller extends Controller
{
    public function index(){
        return view('post.Home');
    }
}
