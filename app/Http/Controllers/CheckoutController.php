<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Customer;
use App\User;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class CheckoutController extends Controller
{


    public function retrieve(Request $request)
    {
        $nome_funcionario = $request->input('nome_funcionario');

        $db_segunda_aereas_brasil = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas aéreas (Brasil)')
            ->where('dia_semana','=','Segunda-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();


        $db_terca_aereas_brasil = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas aéreas (Brasil)')
            ->where('dia_semana','=','Terça-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quarta_aereas_brasil = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas aéreas (Brasil)')
            ->where('dia_semana','=','Quarta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quinta_aereas_brasil = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas aéreas (Brasil)')
            ->where('dia_semana','=','Quinta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_sexta_aereas_brasil = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas aéreas (Brasil)')
            ->where('dia_semana','=','Sexta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        //aereas exterior

        $db_segunda_aereas_ext = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas aéreas (Externas)')
            ->where('dia_semana','=','Segunda-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();


        $db_terca_aereas_ext = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas aéreas (Externas)')
            ->where('dia_semana','=','Terça-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quarta_aereas_ext = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas aéreas (Externas)')
            ->where('dia_semana','=','Quarta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quinta_aereas_ext = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)
            ->where('status','=','1')
            ->where('categoria','=','Despesas aéreas (Externas)')
            ->where('dia_semana','=','Quinta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_sexta_aereas_ext = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)
            ->where('status','=','1')
            ->where('categoria','=','Despesas aéreas (Externas)')
            ->where('dia_semana','=','Sexta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        //Taxi
        $db_segunda_taxi = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Táxi, onibus, balsa /carro alugado ')
            ->where('dia_semana','=','Segunda-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();


        $db_terca_taxi = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Táxi, onibus, balsa /carro alugado ')
            ->where('dia_semana','=','Terça-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quarta_taxi = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Táxi, onibus, balsa /carro alugado ')
            ->where('dia_semana','=','Quarta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();


        $db_quinta_taxi = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Táxi, onibus, balsa /carro alugado ')
            ->where('dia_semana','=','Quinta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_sexta_taxi = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Táxi, onibus, balsa /carro alugado ')
            ->where('dia_semana','=','Sexta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        //estacionamento

        $db_segunda_estacionamento = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Estacionamento / Pedágio')
            ->where('dia_semana','=','Segunda-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_terca_estacionamento = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Estacionamento / Pedágio')
            ->where('dia_semana','=','Terca-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quarta_estacionamento = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Estacionamento / Pedágio')
            ->where('dia_semana','=','Quarta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();


        $db_quinta_estacionamento = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)
            ->where('status','=','1')
            ->where('categoria','=','Estacionamento / Pedágio')
            ->where('dia_semana','=','Quinta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_sexta_estacionamento = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)
            ->where('status','=','1')
            ->where('categoria','=','Estacionamento / Pedágio')
            ->where('dia_semana','=','Sexta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        //Combustível

        $db_segunda_combustivel = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)
            ->where('status','=','1')
            ->where('categoria','=','Combustível')
            ->where('dia_semana','=','Segunda-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_terca_combustivel = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)
            ->where('status','=','1')
            ->where('categoria','=','Combustível')
            ->where('dia_semana','=','Terca-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quarta_combustivel = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)
            ->where('status','=','1')
            ->where('categoria','=','Combustível')
            ->where('dia_semana','=','Quarta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quinta_combustivel = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Combustível')
            ->where('dia_semana','=','Quinta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_sexta_combustivel = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Combustível')
            ->where('dia_semana','=','Sexta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();


        //Correio

        $db_segunda_correio = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Correio')
            ->where('dia_semana','=','Segunda-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_terca_correio = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Correio')
            ->where('dia_semana','=','Terca-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quarta_correio = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Correio')
            ->where('dia_semana','=','Quarta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quinta_correio = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Correio')
            ->where('dia_semana','=','Quinta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_sexta_correio = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Correio')
            ->where('dia_semana','=','Sexta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        //Telefone

        $db_segunda_telefone = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas com telefone, Fax, Internet')
            ->where('dia_semana','=','Segunda-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_terca_telefone = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas com telefone, Fax, Internet')
            ->where('dia_semana','=','Terça-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quarta_telefone = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas com telefone, Fax, Internet')
            ->where('dia_semana','=','Quarta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quinta_telefone = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas com telefone, Fax, Internet')
            ->where('dia_semana','=','Quinta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_sexta_telefone = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas com telefone, Fax, Internet')
            ->where('dia_semana','=','Sexta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_segunda_hosp_brasil = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Hospedagem -Brasil c/ café da manhã')
            ->where('dia_semana','=','Segunda-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_terca_hosp_brasil = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Hospedagem -Brasil c/ café da manhã')
            ->where('dia_semana','=','Terça-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quarta_hosp_brasil = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Hospedagem -Brasil c/ café da manhã')
            ->where('dia_semana','=','Quarta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quinta_hosp_brasil = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Hospedagem -Brasil c/ café da manhã')
            ->where('dia_semana','=','Quinta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_sexta_hosp_brasil = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Hospedagem -Brasil c/ café da manhã')
            ->where('dia_semana','=','Sexta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_segunda_hosp_ext = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Hospedagem -Exterior c/ café da manhã')
            ->where('dia_semana','=','Segunda-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_terca_hosp_ext = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Hospedagem -Exterior c/ café da manhã')
            ->where('dia_semana','=','Terça-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quarta_hosp_ext = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Hospedagem -Exterior c/ café da manhã')
            ->where('dia_semana','=','Quarta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quinta_hosp_ext = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Hospedagem -Exterior c/ café da manhã')
            ->where('dia_semana','=','Quinta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_sexta_hosp_ext = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Hospedagem -Exterior c/ café da manhã')
            ->where('dia_semana','=','Sexta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_segunda_convite = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Convite')
            ->where('dia_semana','=','Segunda-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_terca_convite = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Convite')
            ->where('dia_semana','=','Terça-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quarta_convite = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Convite')
            ->where('dia_semana','=','Quarta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quinta_convite = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Convite')
            ->where('dia_semana','=','Quinta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_sexta_convite = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Convite')
            ->where('dia_semana','=','Sexta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();


        $db_segunda_refeicoes = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Refeições')
            ->where('dia_semana','=','Segunda-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_terca_refeicoes = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Refeições')
            ->where('dia_semana','=','Terca-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quarta_refeicoes = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Refeições')
            ->where('dia_semana','=','Quarta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quinta_refeicoes = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Refeições')
            ->where('dia_semana','=','Quinta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_sexta_refeicoes = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Refeições')
            ->where('dia_semana','=','Sexta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();


        $db_segunda_refeicoes_in = DB::table('rdv_post')
        ->select(DB::raw('sum(valor_cupom) as valortotal'))
        ->where('nome_funcionario','=',$request->nome_funcionario)
        ->where('status','=','1')
        ->where('categoria','=','Refeições ( Internacional )')
        ->where('dia_semana','=','Segunda-Feira')
        ->where('semana_mes',[$request->semana_mes])
        ->get();

    $db_terca_refeicoes_in = DB::table('rdv_post')
        ->select(DB::raw('sum(valor_cupom) as valortotal'))
        ->where('nome_funcionario','=',$request->nome_funcionario)
        ->where('status','=','1')
        ->where('categoria','=','Refeições ( Internacional )')
        ->where('dia_semana','=','Terca-Feira')
        ->where('semana_mes',[$request->semana_mes])
        ->get();

    $db_quarta_refeicoes_in = DB::table('rdv_post')
        ->select(DB::raw('sum(valor_cupom) as valortotal'))
        ->where('nome_funcionario','=',$request->nome_funcionario)
        ->where('status','=','1')
        ->where('categoria','=','Refeições ( Internacional )')
        ->where('dia_semana','=','Quarta-Feira')
        ->where('semana_mes',[$request->semana_mes])
        ->get();

    $db_quinta_refeicoes_in = DB::table('rdv_post')
        ->select(DB::raw('sum(valor_cupom) as valortotal'))
        ->where('nome_funcionario','=',$request->nome_funcionario)
        ->where('status','=','1')
        ->where('categoria','=','Refeições ( Internacional )')
        ->where('dia_semana','=','Quinta-Feira')
        ->where('semana_mes',[$request->semana_mes])
        ->get();

    $db_sexta_refeicoes_in = DB::table('rdv_post')
        ->select(DB::raw('sum(valor_cupom) as valortotal'))
        ->where('nome_funcionario','=',$request->nome_funcionario)
        ->where('status','=','1')
        ->where('categoria','=','Refeições ( Internacional )')
        ->where('dia_semana','=','Sexta-Feira')
        ->where('semana_mes',[$request->semana_mes])
        ->get();

        $db_segunda_presentes = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Presentes')
            ->where('dia_semana','=','Segunda-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_terca_presentes = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Presentes')
            ->where('dia_semana','=','Terça-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quarta_presentes = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Presentes')
            ->where('dia_semana','=','Quarta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quinta_presentes = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Presentes')
            ->where('dia_semana','=','Quinta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_sexta_presentes = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Presentes')
            ->where('dia_semana','=','Sexta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_segunda_veiculos = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas com veículos')
            ->where('dia_semana','=','Sexta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_terca_veiculos = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas com veículos')
            ->where('dia_semana','=','Terça-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quarta_veiculos = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas com veículos')
            ->where('dia_semana','=','Quarta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quinta_veiculos = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas com veículos')
            ->where('dia_semana','=','Quinta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_sexta_veiculos = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas com veículos')
            ->where('dia_semana','=','Sexta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_segunda_outras_viagens = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Outras despesas de viagens')
            ->where('dia_semana','=','Segunda-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_terca_outras_viagens = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Outras despesas de viagens')
            ->where('dia_semana','=','Terça-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quarta_outras_viagens = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Outras despesas de viagens')
            ->where('dia_semana','=','Quarta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();


        $db_quinta_outras_viagens = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Outras despesas de viagens')
            ->where('dia_semana','=','Quinta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_sexta_outras_viagens = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Outras despesas de viagens')
            ->where('dia_semana','=','Sexta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();


        $db_segunda_outras = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Outras despesas (não de viagens)')
            ->where('dia_semana','=','Segunda-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_terca_outras = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Outras despesas (não de viagens)')
            ->where('dia_semana','=','Terça-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quarta_outras = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Outras despesas (não de viagens)')
            ->where('dia_semana','=','Quarta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quinta_outras = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Outras despesas (não de viagens)')
            ->where('dia_semana','=','Quinta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_sexta_outras = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Outras despesas (não de viagens)')
            ->where('dia_semana','=','Sexta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();


        $db_segunda_kmprop = DB::table('rdv_post')
            ->select(DB::raw('sum(quilometragem) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Carro proprio x km-Satz R$ 0,80')
            ->where('dia_semana','=','Segunda-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_terca_kmprop = DB::table('rdv_post')
            ->select(DB::raw('sum(quilometragem) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Carro proprio x km-Satz R$ 0,80')
            ->where('dia_semana','=','Terça-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quarta_kmprop = DB::table('rdv_post')
            ->select(DB::raw('sum(quilometragem) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Carro proprio x km-Satz R$ 0,80')
            ->where('dia_semana','=','Quarta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_quinta_kmprop = DB::table('rdv_post')
            ->select(DB::raw('sum(quilometragem) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Carro proprio x km-Satz R$ 0,80')
            ->where('dia_semana','=','Quinta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_sexta_kmprop = DB::table('rdv_post')
            ->select(DB::raw('sum(quilometragem) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Carro proprio x km-Satz R$ 0,80')
            ->where('dia_semana','=','Sexta-Feira')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        // total

        $semana_mes = $request->input('semana_mes');

        $db_total_kmprop = DB::table('rdv_post')
            ->select(DB::raw('sum((quilometragem * "0.80")) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Carro proprio x km-Satz R$ 0,80')
            ->where('semana_mes',[$request->semana_mes])
            ->get();


        $db_total_refeicoes = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Refeições')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

            $db_total_refeicoes_in = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Refeições ( Internacional )')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_total_convite = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Convite')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_total_hosp_ext = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Hospedagem -Exterior c/ café da manhã')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_total_aereas_ext = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas aéreas (Externas)')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_total_aereas_brasil = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas aéreas (Brasil)')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_total_taxi = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Táxi, onibus, balsa /carro alugado ')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_total_estacionamento = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Estacionamento / Pedágio')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_total_combustivel = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Combustível')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_total_correio = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Correio')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_total_telefone = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas com telefone, Fax, Internet')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_total_hosp_brasil= DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Hospedagem -Brasil c/ café da manhã')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_total_presentes= DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Presentes')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_total_veiculos= DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Despesas com veículos')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_total_outras_viagens = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Outras despesas de viagens')
            ->where('semana_mes',[$request->semana_mes])
            ->get();


        $db_total_outras = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('categoria','=','Outras despesas (não de viagens)')
            ->where('semana_mes',[$request->semana_mes])
            ->get();

        $db_total = DB::table('rdv_post')
            ->select(DB::raw('sum(valor_cupom) as valortotal'))
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->where('semana_mes',[$request->semana_mes])
            ->get();


        //retrieve_geral

        $despesa_kmprop = DB::table('rdv_post')
            ->select('conta_contabil')
            ->where('categoria','=','Carro proprio x km-Satz R$ 0,80')
            ->groupBy('conta_contabil')
            ->get();

        $viagens_brasil = DB::table('rdv_post')
            ->select('conta_contabil')
            ->where('categoria','=','Despesas aéreas (Brasil)')
            ->groupBy('conta_contabil')
            ->get();

        $viagens_ext = DB::table('rdv_post')
            ->select('conta_contabil')
            ->where('categoria','=','Despesas aéreas (Externas)')
            ->groupBy('conta_contabil')
            ->get();

        $despesa_taxi = DB::table('rdv_post')
            ->select('conta_contabil')
            ->where('categoria','=','Táxi, onibus, balsa /carro alugado ')
            ->groupBy('conta_contabil')
            ->get();

        $despesa_estacionamento = DB::table('rdv_post')
            ->select('conta_contabil')
            ->where('categoria','=','Estacionamento / Pedágio')
            ->groupBy('conta_contabil')
            ->get();

        $despesa_combustivel = DB::table('rdv_post')
            ->select('conta_contabil')
            ->where('categoria','=','Combustível')
            ->groupBy('conta_contabil')
            ->get();

        $despesa_correio = DB::table('rdv_post')
            ->select('conta_contabil')
            ->where('categoria','=','Correio')
            ->groupBy('conta_contabil')
            ->get();

        $despesa_telefone = DB::table('rdv_post')
            ->select('conta_contabil')
            ->where('categoria','=','Despesas com telefone, Fax, Internet')
            ->groupBy('conta_contabil')
            ->get();

        $despesa_hospedagem_brasil = DB::table('rdv_post')
            ->select('conta_contabil')
            ->where('categoria','=','Hospedagem -Brasil c/ café da manhã')
            ->groupBy('conta_contabil')
            ->get();

        $despesa_hospedagem_ext = DB::table('rdv_post')
            ->select('conta_contabil')
            ->where('categoria','=','Hospedagem -Exterior c/ café da manhã')
            ->groupBy('conta_contabil')
            ->get();

        $despesa_convite = DB::table('rdv_post')
            ->select('conta_contabil')
            ->where('categoria','=','Convite')
            ->groupBy('conta_contabil')
            ->get();

        $despesa_refeicoes = DB::table('rdv_post')
            ->select('conta_contabil')
            ->where('categoria','=','Refeições')
            ->groupBy('conta_contabil')
            ->get();

            $despesa_refeicoes_in = DB::table('rdv_post')
            ->select('conta_contabil')
            ->where('categoria','=','Refeições ( Internacional )')
            ->groupBy('conta_contabil')
            ->get();

        $despesa_presentes = DB::table('rdv_post')
            ->select('conta_contabil')
            ->where('categoria','=','Presentes')
            ->groupBy('conta_contabil')
            ->get();

        $despesa_veiculos = DB::table('rdv_post')
            ->select('conta_contabil')
            ->where('categoria','=','Despesas com veículos')
            ->groupBy('conta_contabil')
            ->get();

        $despesa_outras_viagens = DB::table('rdv_post')
            ->select('conta_contabil')
            ->where('categoria','=','Outras despesas de viagens')
            ->groupBy('conta_contabil')
            ->get();

        $despesa_outras = DB::table('rdv_post')
            ->select('conta_contabil')
            ->where('categoria','=','Outras despesas (não de viagens)')
            ->groupBy('conta_contabil')
            ->get();

            $semana_mes = DB::table('rdv_post')
            ->select('semana_mes')
            ->where('nome_funcionario','=',$request->nome_funcionario)

            ->where('status','=','1')
            ->groupBy('semana_mes')
            ->get();

            $descricoes = DB::table('rdv_post')
            ->where('nome_funcionario','=',$request->nome_funcionario)
            ->where('semana_mes','=',[$request->semana_mes])
            ->where('status','=','1')
            ->get();

            $geral = DB::table('rdv_post')
            ->select('capital')
            ->where('nome_funcionario','=',$request->nome_funcionario)
            ->where('status','=','1')
            ->where('semana_mes','=',[$request->semana_mes])
            ->get();

            $funcionario = DB::table('rdv_post')
            ->select('nome_funcionario')
            ->where('status','=','1')
            ->groupby('nome_funcionario')
            ->get();

            $cc = DB::table('users')
            ->select('conta_contabil')
            ->where('name','=',$request->nome_funcionario)
            ->groupby('conta_contabil')
            ->get();

        return view('checkout',[
            //selects
            'cc'=>$cc,
            'nome_funcionario'=>$request->nome_funcionario,
            'funcionario'=>$funcionario,
            'despesa_kmprop'=>$despesa_kmprop,
            'geral'=>$geral,
            'despesa_veiculos'=>$despesa_veiculos,
            'despesa_outras_viagens'=>$despesa_outras_viagens,
            'despesa_outras'=>$despesa_outras,
            'despesa_hospedagem_brasil'=>$despesa_hospedagem_brasil,
            'despesa_hospedagem_ext'=>$despesa_hospedagem_ext,
            'despesa_convite'=>$despesa_convite,
            'despesa_refeicoes_in'=>$despesa_refeicoes_in,
            'despesa_refeicoes'=>$despesa_refeicoes,
            'despesa_presentes'=>$despesa_presentes,
            'despesa_telefone'=>$despesa_telefone,
            'despesa_correio'=>$despesa_correio,
            'despesa_combustivel'=>$despesa_combustivel,
            'despesa_estacionamento'=>$despesa_estacionamento,
            'viagens_brasil'=>$viagens_brasil,
            'viagens_ext'=>$viagens_ext,
            'despesa_taxi'=>$despesa_taxi,
            'semana_mes'=>$semana_mes,
            'descricoes'=>$descricoes,

            //totais
            'db_total_kmprop'=>$db_total_kmprop,
            'db_total'=>$db_total,
            'db_total_outras'=>$db_total_outras,
            'db_total_outras_viagens'=>$db_total_outras_viagens,
            'db_total_veiculos'=>$db_total_veiculos,
            'db_total_presentes'=>$db_total_presentes,
            'db_total_refeicoes'=>$db_total_refeicoes,
            'db_total_refeicoes_in'=>$db_total_refeicoes_in,
            'db_total_convite'=>$db_total_convite,
            'db_total_hosp_ext'=>$db_total_hosp_ext,
            'db_total_hosp_brasil'=>$db_total_hosp_brasil,
            'db_total_telefone'=>$db_total_telefone,
            'db_total_correio'=>$db_total_correio,
            'db_total_estacionamento'=>$db_total_estacionamento,
            'db_total_taxi'=>$db_total_taxi,
            'db_total_aereas_brasil'=>$db_total_aereas_brasil,
            'db_total_aereas_ext'=>$db_total_aereas_ext,
            'db_total_combustivel'=>$db_total_combustivel,

            //weekdays
            'db_segunda_kmprop'=>$db_segunda_kmprop,
            'db_terca_kmprop'=>$db_terca_kmprop,
            'db_quarta_kmprop'=>$db_quarta_kmprop,
            'db_quinta_kmprop'=>$db_quinta_kmprop,
            'db_sexta_kmprop'=>$db_sexta_kmprop,
            'db_segunda_outras'=>$db_segunda_outras,
            'db_terca_outras'=>$db_terca_outras,
            'db_quarta_outras'=>$db_quarta_outras,
            'db_quinta_outras'=>$db_quinta_outras,
            'db_sexta_outras'=>$db_sexta_outras,
            'db_segunda_outras_viagens'=>$db_segunda_outras_viagens,
            'db_terca_outras_viagens'=>$db_terca_outras_viagens,
            'db_quarta_outras_viagens'=>$db_quarta_outras_viagens,
            'db_quinta_outras_viagens'=>$db_quinta_outras_viagens,
            'db_sexta_outras_viagens'=>$db_sexta_outras_viagens,
            'db_segunda_veiculos'=>$db_segunda_veiculos,
            'db_terca_veiculos'=>$db_terca_veiculos,
            'db_quarta_veiculos'=>$db_quarta_veiculos,
            'db_quinta_veiculos'=>$db_quinta_veiculos,
            'db_sexta_veiculos'=>$db_sexta_veiculos,
            'db_segunda_presentes'=>$db_segunda_presentes,
            'db_terca_presentes'=>$db_terca_presentes,
            'db_quarta_presentes'=>$db_quarta_presentes,
            'db_quinta_presentes'=>$db_quinta_presentes,
            'db_sexta_presentes'=>$db_sexta_presentes,
            'db_segunda_refeicoes_in'=>$db_segunda_refeicoes_in,
            'db_terca_refeicoes_in'=>$db_terca_refeicoes_in,
            'db_quarta_refeicoes_in'=>$db_quarta_refeicoes_in,
            'db_quinta_refeicoes_in'=>$db_quinta_refeicoes_in,
            'db_sexta_refeicoes_in'=>$db_sexta_refeicoes_in,
            'db_segunda_refeicoes'=>$db_segunda_refeicoes,
            'db_terca_refeicoes'=>$db_terca_refeicoes,
            'db_quarta_refeicoes'=>$db_quarta_refeicoes,
            'db_quinta_refeicoes'=>$db_quinta_refeicoes,
            'db_sexta_refeicoes'=>$db_sexta_refeicoes,
            'db_segunda_convite'=>$db_segunda_convite,
            'db_terca_convite'=>$db_terca_convite,
            'db_quarta_convite'=>$db_quarta_convite,
            'db_quinta_convite'=>$db_quinta_convite,
            'db_sexta_convite'=>$db_sexta_convite,
            'db_segunda_hosp_ext'=>$db_segunda_hosp_ext,
            'db_terca_hosp_ext'=>$db_terca_hosp_ext,
            'db_quarta_hosp_ext'=>$db_quarta_hosp_ext,
            'db_quinta_hosp_ext'=>$db_quinta_hosp_ext,
            'db_sexta_hosp_ext'=>$db_sexta_hosp_ext,
            'db_segunda_hosp_brasil'=>$db_segunda_hosp_brasil,
            'db_terca_hosp_brasil'=>$db_terca_hosp_brasil,
            'db_quarta_hosp_brasil'=>$db_quarta_hosp_brasil,
            'db_quinta_hosp_brasil'=>$db_quinta_hosp_brasil,
            'db_sexta_hosp_brasil'=>$db_sexta_hosp_brasil,
            'db_segunda_telefone'=>$db_segunda_telefone,
            'db_terca_telefone'=>$db_terca_telefone,
            'db_quarta_telefone'=>$db_quarta_telefone,
            'db_quinta_telefone'=>$db_quinta_telefone,
            'db_sexta_telefone'=>$db_sexta_telefone,
            'db_segunda_correio'=>$db_segunda_correio,
            'db_terca_correio'=>$db_terca_correio,
            'db_quarta_correio'=>$db_quarta_correio,
            'db_quinta_correio'=>$db_quinta_correio,
            'db_sexta_correio'=>$db_sexta_correio,
            'db_segunda_combustivel'=>$db_segunda_combustivel,
            'db_terca_combustivel'=>$db_terca_combustivel,
            'db_quarta_combustivel'=>$db_quarta_combustivel,
            'db_quinta_combustivel'=>$db_quinta_combustivel,
            'db_sexta_combustivel'=>$db_sexta_combustivel,
            'db_segunda_estacionamento'=>$db_segunda_estacionamento,
            'db_terca_estacionamento'=>$db_terca_estacionamento,
            'db_quarta_estacionamento'=>$db_quarta_estacionamento,
            'db_quinta_estacionamento'=>$db_quinta_estacionamento,
            'db_sexta_estacionamento'=>$db_sexta_estacionamento,
            'db_segunda_aereas_brasil'=>$db_segunda_aereas_brasil,
            'db_terca_aereas_brasil'=>$db_terca_aereas_brasil,
            'db_quarta_aereas_brasil'=> $db_quarta_aereas_brasil,
            'db_quinta_aereas_brasil'=>$db_quinta_aereas_brasil,
            'db_sexta_aereas_brasil'=>$db_sexta_aereas_brasil,
            'db_segunda_aereas_ext'=>$db_segunda_aereas_ext,
            'db_terca_aereas_ext'=>$db_terca_aereas_ext,
            'db_quarta_aereas_ext'=> $db_quarta_aereas_ext,
            'db_quinta_aereas_ext'=>$db_quinta_aereas_ext,
            'db_sexta_aereas_ext'=>$db_sexta_aereas_ext,
            'db_segunda_taxi'=>$db_segunda_taxi,
            'db_terca_taxi'=>$db_terca_taxi,
            'db_quarta_taxi'=>$db_quarta_taxi,
            'db_quinta_taxi'=>$db_quinta_taxi,
            'db_sexta_taxi'=>$db_sexta_taxi,

            ]);
    }

    public function rdv_ext_post(Request $request)
    {

        $nome_ext = $request->input('nome_ext_1');
        $cc_ext = $request->input('cc_ext');
        $data_input_ext = $request->input('data_input_ext');
        $semana_mes = $request->input('semana_mes_ext');
        $status = ('1');
        $valor_total_ext = $request->input('valor_total_ext');


                DB::table('ext_post')
                    ->insert([

                        'nome_ext'=>$nome_ext,
                        'cc_ext'=>$cc_ext,
                        'data_input_ext'=>$data_input_ext,
                        'semana_mes_ext'=>$semana_mes,
                        'status'=>$status,
                        'valor_total_ext'=>$valor_total_ext

                        ]);


            return back()->with('Success', 'Sucesso');
    }


    public function store(Request $request)
    {
        $status = $request->input('status');
        $id = $request->input('id');
        $data_input = Carbon::now()->format('Y-m-d');

        if (is_array($id)){

            foreach ($id as $k => $v) {
                DB::table('rdv_post')
                    ->where('id','=',$request->id[$k])
                    ->update(['status'=>$status[$k],'data_input'=>$data_input]);

            }
            return back()->with('Success', 'Sucess');
            }
    }


    }



