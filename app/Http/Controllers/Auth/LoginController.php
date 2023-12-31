<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Conta;
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
        $contas = Conta::where('User_id', Auth::user()->id)->get();
        return view('auth.index', compact('contas'));
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
