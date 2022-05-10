<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateController extends Controller
{
    public function home(){
        return view('private.home');
    }
}
