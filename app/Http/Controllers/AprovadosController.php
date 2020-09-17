<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AprovadosController extends Controller
{

    public function index()
    {
        return view('aprovados');

    }

    public function retrieve(Request $request)
    {

            $semana_mes= $request->input('semana_mes');

            $retrieve = DB::table('rdv_post')
            ->select('nome_funcionario','semana_mes','data_input', DB::raw('SUM(valor_cupom) as total'))
            ->where('semana_mes','=',$request->semana_mes)
            ->where('status','=','99')
            ->groupBy('nome_funcionario','semana_mes','data_input')
            ->get();

            $semana_mes = DB::table('rdv_post')
            ->select('semana_mes')
            ->where('status','=','99')
            ->groupBy('semana_mes')
            ->get();

            return view('aprovados',['retrieve'=>$retrieve,'semana_mes'=>$semana_mes]);
    }


}
