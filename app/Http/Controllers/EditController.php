<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function retrieve(Request $request)
    {

        $db_retrieve = DB::table('rdv_post')
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('semana_mes','=',[$request->semana_retrieve])
            ->get();

            $semana_mes = DB::table('rdv_post')
            ->select('semana_mes')
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->groupBy('semana_mes')
            ->get();

        return view('edit',['db_retrieve'=>$db_retrieve,'semana_retrieve'=>$request->semana_retrieve,'retrievesemana'=>$semana_mes]);
    }

    public function store(Request $request)
    {
        $id = $request->input('id');
        $data_cupom = $request->input('data_cupom');
        $descricao_cupom = $request->input('descricao_cupom');
        $valor_cupom = $request->input('valor_cupom');
        $status = $request->input('status');

        if (is_array($data_cupom)){

            foreach ($data_cupom as $k => $v) {
                DB::table('rdv_post')
                    ->where('id','=',$id[$k])
                    ->update(['semana_mes'=>$request->semana_mes[$k],'data_cupom'=>$data_cupom[$k],
                        'descricao_cupom'=>$descricao_cupom[$k],'valor_cupom'=>$valor_cupom[$k],'status'=>$status[$k]]);

            }
            return back()->with('Success', 'Sucesso');
            }
    }

}
