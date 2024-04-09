<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class regitercontroller extends Controller
{

    public function create(){
        return view('auth.register');
    }
    public function register(Request $request){
        $request->validate([
            'title'=>'required|max:100'
        ]);
        $auth = User::create([

            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' =>Hash::make($request-> input('password')),


        ]);

        return redirect('/users');
    }
//     protected function register(array $data)
//     {
//         return User::create([
//             'name'=>$data['name'],
//             'email'=>$data['email'],
//             'password'=>Hash::make($data['email']),
//         ]);
//     }
}
