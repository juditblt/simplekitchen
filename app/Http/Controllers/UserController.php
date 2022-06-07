<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDeletePostRequest;
use App\Http\Requests\UserPromotePostRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // az alkalmazás felhasználóinak listázása a users nézeten
    public function index(){
        return view('admin.users', [
            'users' => User::all()
        ]);
    }

    // előléptetés adminná (feltétel a users.blade-n)
    public function promote(UserPromotePostRequest $request){
        $user = User::find($request->id);
        $user->role = 'admin';
        $user->save();
        return redirect()->route('admin.users');
    }

    // user törlése a receptjeivel együtt
    public function delete(UserDeletePostRequest $request){
        $user = User::find($request->id);
        $user->delete();
        $recipe = $user->recipes();
        $recipe->delete();
        return redirect()->route('admin.users');
    }
}
