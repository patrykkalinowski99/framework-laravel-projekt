<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show($id){
        if(User::find($id)){
        $user = User::find($id);
        return view('profil', ['user' => $user]);
        }
        return redirect("/");
    }

    public function store(Request $request){

        if(User::find($request->user()->id)){
        
            $user = User::find($request->user()->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
        }
        return redirect()->back();
    }
}
