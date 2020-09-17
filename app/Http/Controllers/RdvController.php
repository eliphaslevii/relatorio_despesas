<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class RdvController extends Controller
{

    public function rdvpost_aereas_brasil(Request $request)
    {
        $validateData = $request->validate([
            'valor_cupom' => 'required',
            'descricao_cupom' => 'required',
            'data_cupom' => 'required',
        ]);

        $data_input = Carbon::now()->format('Y-m-d');
        $data_cupom = $request->input('data_cupom');
        $valor_cupom = $request->input('valor_cupom');
        $descricao_cupom = $request->input('descricao_cupom');
        $nome_funcionario =(Auth::user()->name);
        $status = ('1');
        $categoria = ('Despesas aéreas (Brasil)');
        $conta_contabil = ('685000');
        $cc = (Auth::user()->conta_contabil);

        if(is_array($data_cupom))
        {
            foreach ($data_cupom as $k =>$v)
            {
                $date = new Carbon($data_cupom[$k]);

                $dia_semana1 = [
                    0 => 'Domingo',
                    1 => 'Segunda-Feira',
                    2 => 'Terça-Feira',
                    3 => 'Quarta-Feira',
                    4 => 'Quinta-Feira',
                    5 => 'Sexta-Feira',
                    6 => 'Sábado',
                ];

                $semana = [
                    'semana_mes' => ['semana_mes'],
                ];

                $dia_semana = $dia_semana1[$date->dayOfWeek];
                $semana_mes = $date->weekOfYear;


                DB::table('rdv_post')
                    ->insert([
                        'data_cupom'=>$data_cupom[$k],
                        'semana_mes'=>$semana_mes,
                        'valor_cupom'=>$valor_cupom[$k],
                        'descricao_cupom'=>$descricao_cupom[$k],
                        'data_input'=>$data_input,
                        'dia_semana'=>$dia_semana,
                        'centro_custo'=>$cc,
                        'conta_contabil'=>$conta_contabil,
                        'categoria'=>$categoria,
                        'status'=>$status,
                        'nome_funcionario'=>$nome_funcionario]);
            }

            return back()->with('Success','Sucesso');
        }
        
    }

    public function rdvpost_aereas_externas(Request $request)
    {
        $validateData = $request->validate([
            'valor_cupom' => 'required',
            'descricao_cupom' => 'required',
            'data_cupom' => 'required',
        ]);
        $data_input = Carbon::now()->format('Y-m-d');

        $data_cupom = $request->input('data_cupom');
        $valor_cupom = $request->input('valor_cupom');
        $descricao_cupom = $request->input('descricao_cupom');
        $nome_funcionario =(Auth::user()->name);
        $status = ('1');
        $categoria = ('Despesas aéreas (Externas)');
        $conta_contabil = ('685000');
        $cc = (Auth::user()->conta_contabil);


        if(is_array($data_cupom))
        {
            foreach ($data_cupom as $k =>$v)
            {
                $date = new Carbon($data_cupom[$k]);

                $dia_semana1 = [
                    0 => 'Domingo',
                    1 => 'Segunda-Feira',
                    2 => 'Terça-Feira',
                    3 => 'Quarta-Feira',
                    4 => 'Quinta-Feira',
                    5 => 'Sexta-Feira',
                    6 => 'Sábado',
                ];
                $dia_semana = $dia_semana1[$date->dayOfWeek];
                $semana_mes = $date->weekOfYear;

                DB::table('rdv_post')
                    ->insert([
                        'data_input'=>$data_input,
                        'dia_semana'=>$dia_semana,
                        'centro_custo'=>$cc,
                        'conta_contabil'=>$conta_contabil,
                        'categoria'=>$categoria,
                        'semana_mes'=>$semana_mes,
                        'status'=>$status,
                        'data_cupom'=>$data_cupom[$k],
                        'valor_cupom'=>$valor_cupom[$k],
                        'descricao_cupom'=>$descricao_cupom[$k],
                        'nome_funcionario'=>$nome_funcionario]);
            }
            return back()->with('Success','Sucesso');
        }

    }
    public function rdvpost_taxi(Request $request)
    {
        $validateData = $request->validate([
            'valor_cupom' => 'required',
            'descricao_cupom' => 'required',
            'data_cupom' => 'required',
        ]);
        $data_input = Carbon::now()->format('Y-m-d');

        $data_cupom = $request->input('data_cupom');
        $valor_cupom = $request->input('valor_cupom');
        $descricao_cupom = $request->input('descricao_cupom');
        $nome_funcionario = (Auth::user()->name);
        $status = ('1');

        $categoria = ('Táxi, onibus, balsa /carro alugado ');
        $conta_contabil = ('685000');
        $cc = (Auth::user()->conta_contabil);

        if (is_array($data_cupom)) {
            foreach ($data_cupom as $k => $v) {
                $date = new Carbon($data_cupom[$k]);

                $dia_semana1 = [
                    0 => 'Domingo',
                    1 => 'Segunda-Feira',
                    2 => 'Terça-Feira',
                    3 => 'Quarta-Feira',
                    4 => 'Quinta-Feira',
                    5 => 'Sexta-Feira',
                    6 => 'Sábado',
                ];
                $dia_semana = $dia_semana1[$date->dayOfWeek];
                $semana_mes = $date->weekOfYear;

                DB::table('rdv_post')
                    ->insert([
                        'data_input'=>$data_input,
                        'dia_semana'=>$dia_semana,
                        'centro_custo' => $cc,
                        'conta_contabil' => $conta_contabil,
                        'categoria' => $categoria,
                        'semana_mes' => $semana_mes,
                        'status' => $status,
                        'data_cupom' => $data_cupom[$k],
                        'valor_cupom' => $valor_cupom[$k],
                        'descricao_cupom' => $descricao_cupom[$k],
                        'nome_funcionario' => $nome_funcionario]);
            }
            return back()->with('Success', 'Sucesso');
        }
    }
    
    public function rdvpost_estacionamento(Request $request)
    {
        $validateData = $request->validate([
            'valor_cupom' => 'required',
            'descricao_cupom' => 'required',
            'data_cupom' => 'required',
        ]);
        $data_input = Carbon::now()->format('Y-m-d');

        $data_cupom = $request->input('data_cupom');
        $valor_cupom = $request->input('valor_cupom');
        $descricao_cupom = $request->input('descricao_cupom');
        $nome_funcionario = (Auth::user()->name);
        $status = ('1');

        $categoria = ('Estacionamento / Pedágio');
        $conta_contabil = ('685000');
        $cc = (Auth::user()->conta_contabil);


        if (is_array($data_cupom)) {

            foreach ($data_cupom as $k => $v) {
                $date = new Carbon($data_cupom[$k]);

                $dia_semana1 = [
                    0 => 'Domingo',
                    1 => 'Segunda-Feira',
                    2 => 'Terça-Feira',
                    3 => 'Quarta-Feira',
                    4 => 'Quinta-Feira',
                    5 => 'Sexta-Feira',
                    6 => 'Sábado',
                ];
                $dia_semana = $dia_semana1[$date->dayOfWeek];
                $semana_mes = $date->weekOfYear;
                DB::table('rdv_post')
                    ->insert([
                        'data_input'=>$data_input,
                        'dia_semana'=>$dia_semana,
                        'centro_custo' => $cc,
                        'conta_contabil' => $conta_contabil,
                        'categoria' => $categoria,
                        'semana_mes' => $semana_mes,
                        'status' => $status,
                        'data_cupom' => $data_cupom[$k],
                        'valor_cupom' => $valor_cupom[$k],
                        'descricao_cupom' => $descricao_cupom[$k],
                        'nome_funcionario' => $nome_funcionario]);
            }
            return back()->with('Success', 'Sucesso');
        }
    }
    public function rdvpost_combustivel(Request $request)
    {
        $validateData = $request->validate([
            'valor_cupom' => 'required',
            'descricao_cupom' => 'required',
            'data_cupom' => 'required',
        ]);

        $data_input = Carbon::now()->format('Y-m-d');
        $data_cupom = $request->input('data_cupom');
        $valor_cupom = $request->input('valor_cupom');
        $descricao_cupom = $request->input('descricao_cupom');
        $nome_funcionario = (Auth::user()->name);
        $status = ('1');

        $categoria = ('Combustível');
        $conta_contabil = ('688000');
        $cc = (Auth::user()->conta_contabil);

        if (is_array($data_cupom)) {

            foreach ($data_cupom as $k => $v) {
                $date = new Carbon($data_cupom[$k]);

                $dia_semana1 = [
                    0 => 'Domingo',
                    1 => 'Segunda-Feira',
                    2 => 'Terça-Feira',
                    3 => 'Quarta-Feira',
                    4 => 'Quinta-Feira',
                    5 => 'Sexta-Feira',
                    6 => 'Sábado',
                ];
                $dia_semana = $dia_semana1[$date->dayOfWeek];
                $semana_mes = $date->weekOfYear;
                DB::table('rdv_post')
                    ->insert([
                        'data_input'=>$data_input,
                        'dia_semana'=>$dia_semana,
                        'centro_custo' => $cc,
                        'conta_contabil' => $conta_contabil,
                        'categoria' => $categoria,
                        'semana_mes' => $semana_mes,
                        'status' => $status,
                        'data_cupom' => $data_cupom[$k],
                        'valor_cupom' => $valor_cupom[$k],
                        'descricao_cupom' => $descricao_cupom[$k],
                        'nome_funcionario' => $nome_funcionario]);
            }
            return back()->with('Success', 'Sucesso');
        }
    }protected function getValidationFactory()
{
}

    public function rdvpost_correio(Request $request)
    {
        $validateData = $request->validate([
            'valor_cupom' => 'required',
            'descricao_cupom' => 'required',
            'data_cupom' => 'required',
        ]);

        $data_input = Carbon::now()->format('Y-m-d');
        $data_cupom = $request->input('data_cupom');
        $valor_cupom = $request->input('valor_cupom');
        $descricao_cupom = $request->input('descricao_cupom');
        $nome_funcionario = (Auth::user()->name);
        $status = ('1');

        $categoria = ('Correio');
        $conta_contabil = ('682000');
        $cc = (Auth::user()->conta_contabil);


        if (is_array($data_cupom)) {

            foreach ($data_cupom as $k => $v) {
                $date = new Carbon($data_cupom[$k]);

                $dia_semana1 = [
                    0 => 'Domingo',
                    1 => 'Segunda-Feira',
                    2 => 'Terça-Feira',
                    3 => 'Quarta-Feira',
                    4 => 'Quinta-Feira',
                    5 => 'Sexta-Feira',
                    6 => 'Sábado',
                ];
                $dia_semana = $dia_semana1[$date->dayOfWeek];
                $semana_mes = $date->weekOfYear;
                DB::table('rdv_post')
                    ->insert([
                        'data_input'=>$data_input,
                        'dia_semana'=>$dia_semana,
                        'centro_custo' => $cc,
                        'conta_contabil' => $conta_contabil,
                        'categoria' => $categoria,
                        'semana_mes' => $semana_mes,
                        'status' => $status,
                        'data_cupom' => $data_cupom[$k],
                        'valor_cupom' => $valor_cupom[$k],
                        'descricao_cupom' => $descricao_cupom[$k],
                        'nome_funcionario' => $nome_funcionario]);
            }
            return back()->with('Success', 'Sucesso');
        }
    }

    public function rdvpost_telefone(Request $request)
    {
        $validateData = $request->validate([
            'valor_cupom' => 'required',
            'descricao_cupom' => 'required',
            'data_cupom' => 'required',
        ]);

        $data_input = Carbon::now()->format('Y-m-d');
        $data_cupom = $request->input('data_cupom');
        $valor_cupom = $request->input('valor_cupom');
        $descricao_cupom = $request->input('descricao_cupom');
        $nome_funcionario = (Auth::user()->name);
        $status = ('1');

        $categoria = ('Despesas com telefone, Fax, Internet');
        $conta_contabil = ('682000');
        $cc = (Auth::user()->conta_contabil);


        if (is_array($data_cupom)) {

            foreach ($data_cupom as $k => $v) {
                $date = new Carbon($data_cupom[$k]);

                $dia_semana1 = [
                    0 => 'Domingo',
                    1 => 'Segunda-Feira',
                    2 => 'Terça-Feira',
                    3 => 'Quarta-Feira',
                    4 => 'Quinta-Feira',
                    5 => 'Sexta-Feira',
                    6 => 'Sábado',
                ];
                $dia_semana = $dia_semana1[$date->dayOfWeek];
                $semana_mes = $date->weekOfYear;
                DB::table('rdv_post')
                    ->insert([
                        'data_input'=>$data_input,
                        'dia_semana'=>$dia_semana,
                        'centro_custo' => $cc,
                        'conta_contabil' => $conta_contabil,
                        'categoria' => $categoria,
                        'semana_mes' => $semana_mes,
                        'status' => $status,
                        'data_cupom' => $data_cupom[$k],
                        'valor_cupom' => $valor_cupom[$k],
                        'descricao_cupom' => $descricao_cupom[$k],
                        'nome_funcionario' => $nome_funcionario]);
            }
            return back()->with('Success', 'Sucesso');
        }
    }
    public function rdvpost_hospedagem_brasil(Request $request)
    {
        $validateData = $request->validate([
            'valor_cupom' => 'required',
            'descricao_cupom' => 'required',
            'data_cupom' => 'required',
        ]);

        $data_input = Carbon::now()->format('Y-m-d');
        $data_cupom = $request->input('data_cupom');
        $valor_cupom = $request->input('valor_cupom');
        $descricao_cupom = $request->input('descricao_cupom');
        $nome_funcionario = (Auth::user()->name);
        $status = ('1');

        $categoria = ('Hospedagem -Brasil c/ café da manhã');
        $conta_contabil = ('685001');
        $capital = $request->input('capital');
        $cc = (Auth::user()->conta_contabil);

        if (is_array($data_cupom)) {

            foreach ($data_cupom as $k => $v) {
                $date = new Carbon($data_cupom[$k]);

                $dia_semana1 = [
                    0 => 'Domingo',
                    1 => 'Segunda-Feira',
                    2 => 'Terça-Feira',
                    3 => 'Quarta-Feira',
                    4 => 'Quinta-Feira',
                    5 => 'Sexta-Feira',
                    6 => 'Sábado',
                ];
                $dia_semana = $dia_semana1[$date->dayOfWeek];
                $semana_mes = $date->weekOfYear;
                DB::table('rdv_post')
                    ->insert([
                        'data_input'=>$data_input,
                        'capital'=>$capital[$k],
                        'dia_semana'=>$dia_semana,
                        'centro_custo' => $cc,
                        'conta_contabil' => $conta_contabil,
                        'categoria' => $categoria,
                        'semana_mes' => $semana_mes,
                        'status' => $status,
                        'data_cupom' => $data_cupom[$k],
                        'valor_cupom' => $valor_cupom[$k],
                        'descricao_cupom' => $descricao_cupom[$k],
                        'nome_funcionario' => $nome_funcionario]);
            }
            return back()->with('Success', 'Sucesso');
        }
    }

        public function rdvpost_hospedagem_exterior(Request $request)
        {
            $validateData = $request->validate([
                'valor_cupom' => 'required',
                'descricao_cupom' => 'required',
                'data_cupom' => 'required',
            ]);

            $data_input = Carbon::now()->format('Y-m-d');
            $data_cupom = $request->input('data_cupom');
            $valor_cupom = $request->input('valor_cupom');
            $descricao_cupom = $request->input('descricao_cupom');
            $nome_funcionario = (Auth::user()->name);
            $status = ('1');

            $categoria = ('Hospedagem -Exterior c/ café da manhã');
            $conta_contabil = ('685001');
            $cc = (Auth::user()->conta_contabil);


            if (is_array($data_cupom)) {

                foreach ($data_cupom as $k => $v) {

                    $date = new Carbon($data_cupom[$k]);

                    $dia_semana1 = [
                        0 => 'Domingo',
                        1 => 'Segunda-Feira',
                        2 => 'Terça-Feira',
                        3 => 'Quarta-Feira',
                        4 => 'Quinta-Feira',
                        5 => 'Sexta-Feira',
                        6 => 'Sábado',
                    ];
                    $dia_semana = $dia_semana1[$date->dayOfWeek];
                $semana_mes = $date->weekOfYear;

                    DB::table('rdv_post')
                        ->insert([
                            'data_input'=>$data_input,
                            'dia_semana'=>$dia_semana,
                            'centro_custo' => $cc,
                            'conta_contabil' => $conta_contabil,
                            'categoria' => $categoria,
                            'semana_mes' => $semana_mes,
                            'status' => $status,
                            'data_cupom' => $data_cupom[$k],
                            'valor_cupom' => $valor_cupom[$k],
                            'descricao_cupom' => $descricao_cupom[$k],
                            'nome_funcionario' => $nome_funcionario]);
                }
                return back()->with('Success', 'Sucesso');
            }
        }

        public function rdvpost_convite(Request $request)
    {
        $validateData = $request->validate([
            'valor_cupom' => 'required',
            'descricao_cupom' => 'required',
            'data_cupom' => 'required',
        ]);

        $data_input = Carbon::now()->format('Y-m-d');
        $data_cupom = $request->input('data_cupom');
        $valor_cupom = $request->input('valor_cupom');
        $descricao_cupom = $request->input('descricao_cupom');
        $nome_funcionario = (Auth::user()->name);
        $status = ('1');

        $categoria = ('Convite');
        $conta_contabil = ('686000');
        $cc = (Auth::user()->conta_contabil);
        $refeicao = $request->input('refeicao');
        $convidados = $request->input('convidados');
        $capital = $request->input('capital');

        if (is_array($data_cupom)) {

            foreach ($data_cupom as $k => $v) {
                $date = new Carbon($data_cupom[$k]);

                $dia_semana1 = [
                    0 => 'Domingo',
                    1 => 'Segunda-Feira',
                    2 => 'Terça-Feira',
                    3 => 'Quarta-Feira',
                    4 => 'Quinta-Feira',
                    5 => 'Sexta-Feira',
                    6 => 'Sábado',
                ];
                $dia_semana = $dia_semana1[$date->dayOfWeek];
                $semana_mes = $date->weekOfYear;
                DB::table('rdv_post')
                    ->insert([
                        'data_input'=>$data_input,
                        'capital'=>$capital[$k],
                        'refeicao'=>$refeicao[$k],
                        'convidados'=>$convidados[$k],
                        'dia_semana'=>$dia_semana,
                        'centro_custo' => $cc,
                        'conta_contabil' => $conta_contabil,
                        'categoria' => $categoria,
                        'semana_mes' => $semana_mes,
                        'status' => $status,
                        'data_cupom' => $data_cupom[$k],
                        'valor_cupom' => $valor_cupom[$k],
                        'descricao_cupom' => $descricao_cupom[$k],
                        'nome_funcionario' => $nome_funcionario]);
            }
            return back()->with('Success', 'Sucesso');
        }
    }
    public function rdvpost_refeicoes(Request $request)
    {
        $validateData = $request->validate([
            'valor_cupom' => 'required',
            'descricao_cupom' => 'required',
            'data_cupom' => 'required',
        ]);

        $data_input = Carbon::now()->format('Y-m-d');
        $data_cupom = $request->input('data_cupom');
        $valor_cupom = $request->input('valor_cupom');
        $descricao_cupom = $request->input('descricao_cupom');
        $capital = $request->input('capital');
        $nome_funcionario = (Auth::user()->name);
        $status = ('1');

        $categoria = $request->input('refeicoes');
        $conta_contabil = ('685200');
        $cc = (Auth::user()->conta_contabil);

        if (is_array($data_cupom)) {

            foreach ($data_cupom as $k => $v) {
                $date = new Carbon($data_cupom[$k]);

                $dia_semana1 = [
                    0 => 'Domingo',
                    1 => 'Segunda-Feira',
                    2 => 'Terça-Feira',
                    3 => 'Quarta-Feira',
                    4 => 'Quinta-Feira',
                    5 => 'Sexta-Feira',
                    6 => 'Sábado',
                ];
                $dia_semana = $dia_semana1[$date->dayOfWeek];
                $semana_mes = $date->weekOfYear;
                DB::table('rdv_post')
                    ->insert([
                        'data_input'=>$data_input,
                        'dia_semana'=>$dia_semana,
                        'centro_custo' => $cc,
                        'conta_contabil' => $conta_contabil,
                        'semana_mes' => $semana_mes,
                        'status' => $status,
                        'categoria' => $categoria[$k],
                        'data_cupom' => $data_cupom[$k],
                        'valor_cupom' => $valor_cupom[$k],
                        'descricao_cupom' => $descricao_cupom[$k],
                        'nome_funcionario' => $nome_funcionario,
                        'capital'=>$capital[$k]]);
            }
            return back()->with('Success', 'Sucesso');
        }
    }
    public function rdvpost_presentes(Request $request)
    {
        $validateData = $request->validate([
            'valor_cupom' => 'required',
            'descricao_cupom' => 'required',
            'data_cupom' => 'required',
        ]);

        $data_input = Carbon::now()->format('Y-m-d');
        $data_cupom = $request->input('data_cupom');
        $valor_cupom = $request->input('valor_cupom');
        $descricao_cupom = $request->input('descricao_cupom');
        $nome_funcionario = (Auth::user()->name);
        $status = ('1');

        $categoria = ('Presentes');
        $conta_contabil = ('687100');
        $cc = (Auth::user()->conta_contabil);

        if (is_array($data_cupom)) {

            foreach ($data_cupom as $k => $v) {
                $date = new Carbon($data_cupom[$k]);

                $dia_semana1 = [
                    0 => 'Domingo',
                    1 => 'Segunda-Feira',
                    2 => 'Terça-Feira',
                    3 => 'Quarta-Feira',
                    4 => 'Quinta-Feira',
                    5 => 'Sexta-Feira',
                    6 => 'Sábado',
                ];
                $dia_semana = $dia_semana1[$date->dayOfWeek];
                $semana_mes = $date->weekOfYear;
                DB::table('rdv_post')
                    ->insert([
                        'data_input'=>$data_input,
                        'dia_semana'=>$dia_semana,
                        'centro_custo' => $cc,
                        'conta_contabil' => $conta_contabil,
                        'categoria' => $categoria,
                        'semana_mes' => $semana_mes,
                        'status' => $status,
                        'data_cupom' => $data_cupom[$k],
                        'valor_cupom' => $valor_cupom[$k],
                        'descricao_cupom' => $descricao_cupom[$k],
                        'nome_funcionario' => $nome_funcionario]);
            }
            return back()->with('Success', 'Sucesso');
        }
    }
    public function rdvpost_veiculos(Request $request)
    {
        $validateData = $request->validate([
            'valor_cupom' => 'required',
            'descricao_cupom' => 'required',
            'data_cupom' => 'required',
        ]);

        $data_input = Carbon::now()->format('Y-m-d');
        $data_cupom = $request->input('data_cupom');
        $valor_cupom = $request->input('valor_cupom');
        $descricao_cupom = $request->input('descricao_cupom');
        $nome_funcionario = (Auth::user()->name);
        $status = ('1');

        $categoria = ('Despesas com veículos');
        $conta_contabil = ('650300');
        $cc = (Auth::user()->conta_contabil);


        if (is_array($data_cupom)) {

            foreach ($data_cupom as $k => $v) {
                $date = new Carbon($data_cupom[$k]);

                $dia_semana1 = [
                    0 => 'Domingo',
                    1 => 'Segunda-Feira',
                    2 => 'Terça-Feira',
                    3 => 'Quarta-Feira',
                    4 => 'Quinta-Feira',
                    5 => 'Sexta-Feira',
                    6 => 'Sábado',
                ];
                $dia_semana = $dia_semana1[$date->dayOfWeek];
                $semana_mes = $date->weekOfYear;
                DB::table('rdv_post')
                    ->insert([
                        'data_input'=>$data_input,
                        'dia_semana'=>$dia_semana,
                        'centro_custo' => $cc,
                        'conta_contabil' => $conta_contabil,
                        'categoria' => $categoria,
                        'semana_mes' => $semana_mes,
                        'status' => $status,
                        'data_cupom' => $data_cupom[$k],
                        'valor_cupom' => $valor_cupom[$k],
                        'descricao_cupom' => $descricao_cupom[$k],
                        'nome_funcionario' => $nome_funcionario]);
            }
            return back()->with('Success', 'Sucesso');
        }
    }

    public function rdvpost_outras_viagens(Request $request)
    {
        $validateData = $request->validate([
            'valor_cupom' => 'required',
            'descricao_cupom' => 'required',
            'data_cupom' => 'required',
        ]);

        $data_input = Carbon::now()->format('Y-m-d');
        $data_cupom = $request->input('data_cupom');
        $valor_cupom = $request->input('valor_cupom');
        $descricao_cupom = $request->input('descricao_cupom');
        $nome_funcionario = (Auth::user()->name);
        $status = ('1');

        $categoria = ('Outras despesas de viagens');
        $conta_contabil = ('698100');
        $cc = (Auth::user()->conta_contabil);


        if (is_array($data_cupom)) {

            foreach ($data_cupom as $k => $v) {
                $date = new Carbon($data_cupom[$k]);

                $dia_semana1 = [
                    0 => 'Domingo',
                    1 => 'Segunda-Feira',
                    2 => 'Terça-Feira',
                    3 => 'Quarta-Feira',
                    4 => 'Quinta-Feira',
                    5 => 'Sexta-Feira',
                    6 => 'Sábado',
                ];
                $dia_semana = $dia_semana1[$date->dayOfWeek];
                $semana_mes = $date->weekOfYear;
                DB::table('rdv_post')
                    ->insert([
                        'data_input'=>$data_input,
                        'dia_semana'=>$dia_semana,
                        'centro_custo' => $cc,
                        'conta_contabil' => $conta_contabil,
                        'categoria' => $categoria,
                        'semana_mes' => $semana_mes,
                        'status' => $status,
                        'data_cupom' => $data_cupom[$k],
                        'valor_cupom' => $valor_cupom[$k],
                        'descricao_cupom' => $descricao_cupom[$k],
                        'nome_funcionario' => $nome_funcionario]);
            }
            return back()->with('Success', 'Sucesso');
        }
    }
    public function rdvpost_outras(Request $request)
    {
        $validateData = $request->validate([
            'valor_cupom' => 'required',
            'descricao_cupom' => 'required',
            'data_cupom' => 'required',
        ]);

        $data_input = Carbon::now()->format('Y-m-d');
        $data_cupom = $request->input('data_cupom');
        $valor_cupom = $request->input('valor_cupom');
        $descricao_cupom = $request->input('descricao_cupom');
        $nome_funcionario = (Auth::user()->name);
        $status = ('1');

        $categoria = ('Outras despesas (não de viagens)');
        $conta_contabil = ('698100');
        $cc = (Auth::user()->conta_contabil);


        if (is_array($data_cupom)) {

            foreach ($data_cupom as $k => $v) {
                $date = new Carbon($data_cupom[$k]);

                $dia_semana1 = [
                    0 => 'Domingo',
                    1 => 'Segunda-Feira',
                    2 => 'Terça-Feira',
                    3 => 'Quarta-Feira',
                    4 => 'Quinta-Feira',
                    5 => 'Sexta-Feira',
                    6 => 'Sábado',
                ];
                $dia_semana = $dia_semana1[$date->dayOfWeek];
                $semana_mes = $date->weekOfYear;

                DB::table('rdv_post')
                    ->insert([
                        'data_input'=>$data_input,
                        'dia_semana'=>$dia_semana,
                        'centro_custo' => $cc,
                        'conta_contabil' => $conta_contabil,
                        'categoria' => $categoria,
                        'semana_mes' => $semana_mes,
                        'status' => $status,
                        'data_cupom' => $data_cupom[$k],
                        'valor_cupom' => $valor_cupom[$k],
                        'descricao_cupom' => $descricao_cupom[$k],
                        'nome_funcionario' => $nome_funcionario]);
            }
            return back()->with('Success', 'Sucesso');
        }
    }
    public function rdv_postkmproprio(Request $request)
    {
        $validateData = $request->validate([
            'valor_cupom' => 'required',
            'descricao_cupom' => 'required',
            'data_cupom' => 'required',
        ]);

        $data_input = Carbon::now()->format('Y-m-d');
        $data_cupom = $request->input('data_cupom');
        $quilometragem = $request->input('quilometragem');
        $descricao_cupom = $request->input('descricao_cupom');
        $valor_cupom = $request->input('valor_cupom');
        $nome_funcionario = (Auth::user()->name);
        $status = ('1');

        $categoria = ('Carro proprio x km-Satz R$ 0,80');
        $conta_contabil = ('685100');
        $cc = (Auth::user()->conta_contabil);


        if (is_array($data_cupom)) {

            foreach ($data_cupom as $k => $v) {
                $date = new Carbon($data_cupom[$k]);

                $dia_semana1 = [
                    0 => 'Domingo',
                    1 => 'Segunda-Feira',
                    2 => 'Terça-Feira',
                    3 => 'Quarta-Feira',
                    4 => 'Quinta-Feira',
                    5 => 'Sexta-Feira',
                    6 => 'Sábado',
                ];
                $dia_semana = $dia_semana1[$date->dayOfWeek];
                $semana_mes = $date->weekOfYear;

                DB::table('rdv_post')
                    ->insert([
                        'data_input'=>$data_input,
                        'dia_semana'=>$dia_semana,
                        'centro_custo' => $cc,
                        'conta_contabil' => $conta_contabil,
                        'categoria' => $categoria,
                        'semana_mes' => $semana_mes,
                        'status' => $status,
                        'data_cupom' => $data_cupom[$k],
                        'valor_cupom' => $valor_cupom[$k],
                        'descricao_cupom' => $descricao_cupom[$k],
                        'nome_funcionario' => $nome_funcionario,
                        'quilometragem'=>$quilometragem[$k]]);
            }
            return back()->with('Success', 'Sucesso');
        }
    }

}
