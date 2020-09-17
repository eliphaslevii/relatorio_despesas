<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SuggestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('suggestion');
    }

    public function store(Request $request)
    {
        $texto = $request->input('texto');
        $nome_funcionario = (Auth::user()->name);
        $categoria = ('suggestion report');

        DB::table('interacao')
                    ->insert(['texto'=>$texto,'nome_funcionario'=>$nome_funcionario,'categoria'=>$categoria]);

                    return back()->with('Success', 'Sucesso');

    }
}
