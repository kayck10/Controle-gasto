<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use App\Models\Receita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceitaController extends Controller
{

    public function create ($id)
    {
        $conta = Conta::find($id);
        return view('auth.receita', compact('conta'));
    }

    public function store ( Request $request, $id)
    {
        $request['valor'] = substr( $request['valor'], 1);
        $receita = Receita::create([
          'valor' => $request->valor,
          'data' => $request->data,
          'descricao' => $request->descricao,
          'Conta_id' => $id
        ]);

        return redirect()->route('index.usuario');
    }

    public function edit($id)
    {
        
        $receitas = Receita::where('Conta_id', $id)->get();
        return view('conta.edit-receita', compact('receitas'));
    }

    public function update($id, Request $request)
    {
        $receita = Receita::find($id);
        $receita->update($request->all());
        return redirect()->back();
    }

    public function destroy ($id)
    {
        $receita = Receita::find($id);
        $receita->delete();
        return redirect()->back();
    }

}
