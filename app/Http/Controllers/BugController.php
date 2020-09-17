<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BugController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('bug');
    }

    public function store(Request $request)
    {
        $texto = $request->input('texto');
        $nome_funcionario = (Auth::user()->name);
        $categoria = ('bug report');

        DB::table('interacao')
                    ->insert(['texto'=>$texto,'nome_funcionario'=>$nome_funcionario,'categoria'=>$categoria]);

                    return back()->with('Success', 'Sucesso');

    }
}
