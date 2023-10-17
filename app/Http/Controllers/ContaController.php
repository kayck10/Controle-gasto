<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContaController extends Controller
{
   public function create ()
   {
      return view('conta.conta');
   }

   public function store (Request $request)
   {
     
         $contas = Conta::create([
         'nome' => $request->name,
         'saldo' => $request->saldo,
          'User_id' =>Auth::user()->id,
      ]); 
      return redirect()->route('index.usuario', compact('contas'));
   }
}
