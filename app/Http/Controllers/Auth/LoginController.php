<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() 
    {
        return view('auth.login');
    }

    public function index()
    {
        return view('auth.index');
       
    }


    public function autenticacao(Request $request)
    {

    //     $login = Auth::attempt(['email'=> $request->email, 'password' =>$request->password]);

    //   //  dd($login);

    //     if($login){

    //         dd("Sucessoooo!!");
    //
    if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
       return to_route('index.usuario');
        }
    }   
}
