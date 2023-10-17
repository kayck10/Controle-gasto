<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use App\Models\Despesa;
use App\Models\Receita;
use Illuminate\Http\Request;

class DespesaController extends Controller
{
    public function create ($id)
    {
        $conta = Conta::find($id);
        return view('auth.despesa', compact('conta'));
    }

    public function store ($id, Request $request)
    {

        $request->merge(['Conta_id' => $id]);

        $despesas = Despesa::create($request->all());


        return redirect()->route('index.usuario');
    }

    public function edit ($id)
    {
        $despesas = Despesa::where('Conta_id', $id)->get();
        
        return view('conta.edit-despesa', compact('despesas'));
    }

    public function update ($id, Request $request)
    {
        $despesa = Despesa::find($id);
        $despesa->update($request->all());
        return redirect()->back();
    }

    public function ddestroy ($id)
    {
        $despesa = Despesa::find($id);
        $despesa->delete();
        return redirect()->back();
    }
}
