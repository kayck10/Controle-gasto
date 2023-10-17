<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class RegistrarController extends Controller
{
    public function create()
    {
        return view('auth.create');
    }

    public function store(Request $request)
    {    
        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());
        return redirect()->route('login');
    }
}
