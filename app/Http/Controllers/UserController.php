<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDeletePostRequest;
use App\Http\Requests\UserPromotePostRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.users', [
            'users' => User::all()
        ]);
    }

    public function promote(UserPromotePostRequest $request){
        $user = User::find($request->id);
        $user->role = 'admin';
        $user->save();
        return redirect()->route('admin.users');
    }

    public function delete(UserDeletePostRequest $request){
        $user = User::find($request->id);
        $user->delete();
        return redirect()->route('admin.users');
    }
}
