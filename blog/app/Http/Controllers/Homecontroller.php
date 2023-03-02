<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    function showMsg(){

        return view('post.dashboard');
    }


       

    
}
