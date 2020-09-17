<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RdvRetrieveController extends Controller
{
    public function retrieve(Request $request)
    {
        //areas_brasil
        $sweek = Carbon::now()->startOfWeek(Carbon::SUNDAY)->startOfDay();
        $eweek = Carbon::now()->endOfWeek(Carbon::SATURDAY)->endOfDay();

            $dv = DB::table('rdv_post')
                ->select(DB::raw('sum(valor_cupom) as valortotal'))
                ->where('nome_funcionario','=',Auth::user()->name)
                ->where('status','=','1')
                ->where('categoria','=','Despesas aéreas (Brasil)')
                ->whereBetween('data_input',[$sweek,$eweek])
                ->get();

        $db1 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Despesas aéreas (Brasil)" GROUP BY conta_contabil  ');


        //areas_externas


        $dv1 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Despesas aéreas (Externas)')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db2 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Despesas aéreas (Externas)" GROUP BY conta_contabil  ');


        //taxi

        $dv2 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Táxi, onibus, balsa /carro alugado')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db3 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Táxi, onibus, balsa /carro alugado" GROUP BY conta_contabil  ');


        //estacionamento


        $dv3 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Estacionamento / Pedágio')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db4 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Estacionamento / Pedágio" GROUP BY conta_contabil  ');


        $dv4 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Combustível')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db5 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Combustível" GROUP BY conta_contabil  ');

        $dv5 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Correio')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db6 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Correio" GROUP BY conta_contabil  ');


        $dv7 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Despesas com telefone, Fax, Internet')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db7 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Despesas com telefone, Fax, Internet" GROUP BY conta_contabil  ');

        $dv8 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Hospedagem -Brasil c/ café da manhã')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db8 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Hospedagem -Brasil c/ café da manhã" GROUP BY conta_contabil  ');

        $dv9 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Hospedagem -Exterior c/ café da manhã')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db9 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Hospedagem -Exterior c/ café da manhã" GROUP BY conta_contabil');

        $dv10 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Convite')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db10 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Convite" GROUP BY conta_contabil  ');

        $dv11 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Refeições')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db11 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Refeições" GROUP BY conta_contabil  ');

        $dv12 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Presentes')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db12 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Presentes" GROUP BY conta_contabil  ');

        $dv13 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Despesas com veículos')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db13 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Despesas com veículos" GROUP BY conta_contabil  ');

        $dv14 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Outras despesas de viagens')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db14 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Outras despesas de viagens" GROUP BY conta_contabil  ');

        $dv15 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Outras despesas (não de viagens)')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db15 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Outras despesas (não de viagens)" GROUP BY conta_contabil  ');

        $dv16 = DB::table('rdv_post')
        ->select(DB::raw('sum((quilometragem * "0.80"))  as valortotal'))
        ->where('nome_funcionario','=',Auth::user()->name)
        ->where('status','=','1')
        ->where('categoria','=','Carro proprio x km-Satz R$ 0,80')
        ->whereBetween('data_input',[$sweek,$eweek])
        ->get();

        $db16 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Carro proprio x km-Satz R$ 0,80" GROUP BY conta_contabil  ');

        return view('home',[
            'db16'=>$db16,
            'vtotalkm'=>$dv16,
            'vtotalveiculos'=>$dv13,'vtotaloutrasviagens'=>$dv14,
            'vtotalpresentes'=>$dv12,'vtotaloutras'=>$dv15,'db15'=>$db15,'db14'=>$db14,
            'db13'=>$db13,'db'=>$db12,'vtotalconvite'=>$dv10,'vtotalrefeicoes'=>$dv11,
            'db11'=>$db11,'db10'=>$db10,'vtotalhotelexterior'=>$dv9,'db9'=>$db9,
            'vtotalhotelbrasil'=>$dv8,'db8'=>$db8,'vtotaltelefone'=>$dv7,'db7'=>$db7,
            'vtotalcorreio'=>$dv5,'db6'=>$db6,'db5'=>$db5,'db4'=>$db4,'db3'=>
                $db3,'db1'=>$db1,'db2'=>$db2,'vtotal'=>$dv1,
            'vt'=>$dv,'vtotaltaxi'=>$dv2,'vtotalestacionamento'=>$dv3,'vtotalcombustivel'=>$dv4]);

    }

    public function retrieve1(Request $request)
    {
        //areas_brasil
        $sweek = Carbon::now()->startOfWeek(Carbon::SUNDAY)->startOfDay();
        $eweek = Carbon::now()->endOfWeek(Carbon::SATURDAY)->endOfDay();

            $dv = DB::table('rdv_post')
                ->select(DB::raw('sum(valor_cupom) as valortotal'))
                ->where('nome_funcionario','=',Auth::user()->name)
                ->where('status','=','1')
                ->where('categoria','=','Despesas aéreas (Brasil)')
                ->whereBetween('data_input',[$sweek,$eweek])
                ->get();

        $db1 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Despesas aéreas (Brasil)" GROUP BY conta_contabil  ');


        //areas_externas


        $dv1 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Despesas aéreas (Externas)')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db2 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Despesas aéreas (Externas)" GROUP BY conta_contabil  ');


        //taxi

        $dv2 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Táxi, onibus, balsa /carro alugado')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db3 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Táxi, onibus, balsa /carro alugado" GROUP BY conta_contabil  ');


        //estacionamento


        $dv3 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Estacionamento / Pedágio')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db4 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Estacionamento / Pedágio" GROUP BY conta_contabil  ');


        $dv4 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Combustível')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db5 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Combustível" GROUP BY conta_contabil  ');

        $dv5 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Correio')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db6 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Correio" GROUP BY conta_contabil  ');


        $dv7 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Despesas com telefone, Fax, Internet')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db7 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Despesas com telefone, Fax, Internet" GROUP BY conta_contabil  ');

        $dv8 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Hospedagem -Brasil c/ café da manhã')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db8 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Hospedagem -Brasil c/ café da manhã" GROUP BY conta_contabil  ');

        $dv9 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Hospedagem -Exterior c/ café da manhã')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db9 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Hospedagem -Exterior c/ café da manhã" GROUP BY conta_contabil');

        $dv10 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Convite')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db10 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Convite" GROUP BY conta_contabil  ');

        $dv11 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Refeições')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db11 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Refeições" GROUP BY conta_contabil  ');

        $dv12 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Presentes')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db12 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Presentes" GROUP BY conta_contabil  ');

        $dv13 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Despesas com veículos')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db13 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Despesas com veículos" GROUP BY conta_contabil  ');

        $dv14 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Outras despesas de viagens')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db14 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Outras despesas de viagens" GROUP BY conta_contabil  ');

        $dv15 = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',Auth::user()->name)
            ->where('status','=','1')
            ->where('categoria','=','Outras despesas (não de viagens)')
            ->whereBetween('data_input',[$sweek,$eweek])
            ->get();

        $db15 = DB::select('SELECT conta_contabil FROM rdv_post WHERE categoria = "Outras despesas (não de viagens)" GROUP BY conta_contabil  ');



        return view('mobile',[
            'vtotalveiculos'=>$dv13,
            'vtotaloutrasviagens'=>$dv14,
            'vtotalpresentes'=>$dv12,
            'vtotaloutras'=>$dv15,
            'db15'=>$db15,
            'db14'=>$db14,
            'db13'=>$db13,'db'=>$db12,'vtotalconvite'=>$dv10,'vtotalrefeicoes'=>$dv11,
            'db11'=>$db11,'db10'=>$db10,'vtotalhotelexterior'=>$dv9,'db9'=>$db9,
            'vtotalhotelbrasil'=>$dv8,'db8'=>$db8,'vtotaltelefone'=>$dv7,'db7'=>$db7,
            'vtotalcorreio'=>$dv5,'db6'=>$db6,'db5'=>$db5,'db4'=>$db4,'db3'=>
                $db3,'db1'=>$db1,'db2'=>$db2,'vtotal'=>$dv1,
            'vt'=>$dv,'vtotaltaxi'=>$dv2,'vtotalestacionamento'=>$dv3,'vtotalcombustivel'=>$dv4]);

    }
}
