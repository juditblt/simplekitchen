<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.users', [
            'users' => User::all()
        ]);
    }

    public function delete(){

    }

    public function promote(){

    }
}
