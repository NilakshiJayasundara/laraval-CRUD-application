<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function RegisterUser (Request $request){
        $table= new User();
        $this->validate($request,[
            'firstname'=>'required|max:20',
            'lastname'=>'required|max:2',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            'phonenumber'=>'required|max:10',

        ]);

        $table->first_name=$request->input('firstname');
        $table->last_name=$request->input('lastname');
        $table->email=$request->input('email');
        $table->password=bcrypt($request->input('password'));
        $table->phone_number=$request->input('phonenumber');

        $table->save();
        return "data saved";
    }
}
