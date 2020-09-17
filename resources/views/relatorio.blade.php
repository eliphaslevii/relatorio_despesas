@extends('layouts.app')

@section('content')
@if (\Session::has('Success'))
<div class="col s12 m12 right">
    <script> $(document).ready(function () {
            M.toast({html: 'Relatório emitido com sucesso!', classes: 'rounded blue darken-2'});
        })
    </script>
</div>
@endif
<div class="container-fluid">
        <div class="row">
            <div class="col s12 m12">
                <div class="fd-panel mgtop">
                    <div class="fd-panel__header">
                        <div class="fd-panel__head">
                            <h3 class="fd-panel__title">
                                Relatório de despesas
                            </h3>
                            <p class="fd-panel__description">
                                Exportação do relatório de despesas
                            </p>
                        </div>
                        <div class="fd-panel__actions">
                            {{\Carbon\Carbon::now()->format('d-m-Y')}}
                        </div>
                    </div>
                    <form method="GET" action="{{url('/rdv_ext_post')}}" id="content" id="form_ext">
                    <div class="fd-panel__body content" >
                        <div class="row">
                            <div class="col s4 m4">
                                <p class="fd-has-type-2">PFERD RÜGGEBERG DO BRASIL LTDA</p>
                            </div>
                            <div class="col s4 m4">
                                <p class="fd-has-type-2">Relatório de despesas</p>
                            </div>
                            <div class="col s4 m4">
                                <div class="fd-form__set">
                                    <label for="semana_mes" class="fd-form__label">Semana
                                        <span
                                            class="fd-inline-help fd-has-float-right">
                                            <span
                                                class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                    Selecione a semana a ser exportada!
                                            </span>
                                        </span>
                                    </label>
                                    <script>
                                        $(document).ready(function(){
                                            if($('#semana_mes').val() === '')
                                            {
                                                $('#semana_mes').val(0);
                                            }
                                        })
                                    </script>
                                    <div class="fd-form__item">
                                        <select class="fd-form__control" id="semana_mes" name="semana_mes">
                                        <option selected id="oldvalue" value="0"></option>
                                            @foreach($semana_mes as $s)
                                           <option value="{{$s->semana_mes}}">{{$s->semana_mes}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s4 m4">
                                <p class="fd-has-type-1" style="font-size: 20px">Nome: {{Auth::user()->name}}</p>
                            <input hidden value="{{Auth::user()->name}}" name="nome_ext" id="nome_ext">
                            <input id="semana_mes_ext" hidden name="semana_mes_ext">
                            </div>
                            <div class="col s4 m4">
                                <p class="fd-has-type-1">Fornecedor: 6485</p>
                            </div>
                            <div class="col s2 m2">
                                <p class="fd-has-type-1">C/C: {{Auth::user()->conta_contabil}}</p>
                            <input hidden value="{{Auth::user()->conta_contabil}}" name="cc_ext" id="cc_ext">
                            </div>
                            <div class="col s2 m2"> <p>{{\Carbon\Carbon::now()->format('d-m-y')}}</p>
                            <input hidden value="{{\Carbon\Carbon::now()->format('d-m-y')}}" name="data_input_ext" id="data_input_ext">
                            </div>
                        </div>
                        <div class="row">
                        <script>
                          $(document).ready(function () {
                            $('#semana_mes').change(function () {
                                window.location = 'http://127.0.0.1:8000/relatorio/' +$('#semana_mes').val();

                            })
                        });
                        </script>
                        <table class="fd-table content ">
                            <thead>
                            <tr>
                                <th>Conta-Contabil</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Segunda-Feira</th>
                                <th scope="col">Terça-Feira</th>
                                <th scope="col">Quarta-Feira</th>
                                <th scope="col">Quinta-Feira</th>
                                <th scope="col">Sexta-Feira</th>

                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($despesa_kmprop as $v)
                                        <td class="grey lighten-4">{{$v->conta_contabil}}</td>
                                    @endforeach
                                    <td>Carro proprio x km-Satz R$ 0,80</td>
                                    @foreach($db_segunda_kmprop as $v)
                                        <td>{{$v->valortotal}} km</td>
                                    @endforeach
                                    @foreach($db_terca_kmprop as $v)
                                        <td>{{$v->valortotal}} km</td>
                                    @endforeach
                                    @foreach($db_quarta_kmprop as $v)
                                        <td>{{$v->valortotal}} km</td>
                                    @endforeach
                                    @foreach($db_quinta_kmprop as $v)
                                        <td>{{$v->valortotal}} km</td>
                                    @endforeach
                                    @foreach($db_sexta_kmprop as $v)
                                        <td>{{$v->valortotal}} km</td>
                                    @endforeach
                                    @foreach($db_total_kmprop as $v)
                                        <td class="green lighten-5">R$ {{$v->valortotal}}</td>
                                    @endforeach

                                </tr>
                            <tr>
                                @foreach($viagens_brasil ?? '' as $v)
                                    <td class="grey lighten-4">{{$v->conta_contabil}}</td>
                                @endforeach
                                <td>Viagens Aereas Brasil</td>
                                @foreach($db_segunda_aereas_brasil as $v)
                                <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_terca_aereas_brasil as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quarta_aereas_brasil as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quinta_aereas_brasil as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_sexta_aereas_brasil as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_total_aereas_brasil as $v)
                                    <td class="green lighten-5">R$ {{$v->valortotal}}</td>
                                @endforeach

                            </tr>
                            <tr>
                                @foreach($viagens_ext as $v)
                                    <td class="grey lighten-4">{{$v->conta_contabil}}</td>
                                @endforeach
                                <td>Viagens Aereas Exterior</td>

                            @foreach($db_segunda_aereas_ext as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_terca_aereas_ext as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quarta_aereas_ext as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quinta_aereas_ext as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_sexta_aereas_ext as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_total_aereas_ext as $v)
                                    <td class="green lighten-5">R$ {{$v->valortotal}}</td>
                                @endforeach


                            </tr>
                            <tr>
                                @foreach($despesa_taxi as $v)
                                    <td class="grey lighten-4">{{$v->conta_contabil}}</td>
                                @endforeach
                                <td>Táxi, onibus, balsa /carro alugado </td>

                                @foreach($db_segunda_taxi as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_terca_taxi as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quarta_taxi as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quinta_taxi as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_sexta_taxi as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_total_taxi as $v)
                                    <td class="green lighten-5">R$ {{$v->valortotal}}</td>
                                @endforeach


                            </tr>
                            <tr>
                                @foreach($despesa_estacionamento as $v)
                                    <td class="grey lighten-4">{{$v->conta_contabil}}</td>
                                @endforeach
                                <td>Estacionamento / Pedágio</td>

                                @foreach($db_segunda_estacionamento as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_terca_estacionamento as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quarta_estacionamento as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quinta_estacionamento as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_sexta_estacionamento as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_total_estacionamento as $v)
                                    <td class="green lighten-5">R$ {{$v->valortotal}}</td>
                                @endforeach

                            </tr>
                            <tr>
                                @foreach($despesa_combustivel as $v)
                                    <td class="grey lighten-4">{{$v->conta_contabil}}</td>
                                @endforeach
                                <td>Combustível</td>

                                @foreach($db_segunda_combustivel as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_terca_combustivel as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quarta_combustivel as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quinta_combustivel as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_sexta_combustivel as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_total_combustivel as $v)
                                    <td class="green lighten-5">R$ {{$v->valortotal}}</td>
                                @endforeach


                            </tr>
                            <tr>
                                @foreach($despesa_correio as $v)
                                    <td class="grey lighten-4">{{$v->conta_contabil}}</td>
                                @endforeach
                                <td>Correio</td>
                                @foreach($db_segunda_correio as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_terca_correio as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quarta_correio as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quinta_correio as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_sexta_correio as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_total_correio as $v)
                                    <td class="green lighten-5">R$ {{$v->valortotal}}</td>
                                @endforeach


                            </tr>
                            <tr>
                                @foreach($despesa_telefone as $v)
                                    <td class="grey lighten-4">{{$v->conta_contabil}}</td>
                                @endforeach
                                <td>Despesas com telefone, Fax, Internet</td>
                                @foreach($db_segunda_telefone as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_terca_telefone as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quarta_telefone as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quinta_telefone as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_sexta_telefone as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_total_telefone as $v)
                                    <td class="green lighten-5">R$ {{$v->valortotal}}</td>
                                @endforeach

                            </tr>
                            <tr>
                                <script>

                                </script>
                                @foreach($despesa_hospedagem_brasil as $v)
                                    <td class="grey lighten-4">{{$v->conta_contabil}}</td>
                                @endforeach
                                <td>Hospedagem -Brasil c/ café da manhã</td>
                                @foreach($db_segunda_hosp_brasil as $v)
                                    <td id="h1">{{$v->valortotal}}</td>
                                    <input hidden value="{{$v->valortotal}}" id="totalsegundahospedagembrasil">
                                @endforeach
                                @foreach($db_terca_hosp_brasil as $v)
                                    <td id="h2">{{$v->valortotal}}</td>
                                    <input hidden value="{{$v->valortotal}}" id="totaltercahospedagembrasil">
                                @endforeach
                                @foreach($db_quarta_hosp_brasil as $v)
                                    <td id="h3">{{$v->valortotal}}</td>
                                    <input hidden value="{{$v->valortotal}}" id="totalquartahospedagembrasil">
                                @endforeach
                                @foreach($db_quinta_hosp_brasil as $v)
                                    <td id="h4">{{$v->valortotal}}</td>
                                    <input hidden value="{{$v->valortotal}}" id="totalquintahospedagembrasil">
                                @endforeach
                                @foreach($db_sexta_hosp_brasil as $v)
                                    <td id="h5">{{$v->valortotal}}</td>
                                    <input hidden value="{{$v->valortotal}}" id="totalsextahospedagembrasil">
                                @endforeach
                                @foreach($db_total_hosp_brasil as $v)
                                    <td class="green lighten-5" id="ht1">R$ {{$v->valortotal}}</td>
                                @endforeach
                            </tr>
                            <tr>
                                @foreach($despesa_hospedagem_ext as $v)
                                    <td class="grey lighten-4">{{$v->conta_contabil}}</td>
                                @endforeach
                                <td>Hospedagem -Exterior c/ café da manhã</td>
                                @foreach($db_segunda_hosp_ext as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_terca_hosp_ext as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quarta_hosp_ext as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quinta_hosp_ext as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_sexta_hosp_ext as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_total_hosp_ext as $v)
                                    <td class="green lighten-5">R$ {{$v->valortotal}}</td>
                                @endforeach
                            </tr>
                            <tr>
                                @foreach($despesa_convite as $v)
                                    <td class="grey lighten-4">{{$v->conta_contabil}}</td>
                                @endforeach
                                <td>Convite</td>
                                @foreach($db_segunda_convite as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_terca_convite as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quarta_convite as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quinta_convite as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_sexta_convite as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_total_convite as $v)
                                    <td class="green lighten-5">R$ {{$v->valortotal}}</td>
                                @endforeach
                            </tr>
                            <tr>
                                @foreach($despesa_refeicoes as $v)
                                    <td class="grey lighten-4">{{$v->conta_contabil}}</td>
                                @endforeach
                                <td>Refeições</td>
                                @foreach($db_segunda_refeicoes as $v)
                                    <td id="1"> {{$v->valortotal}}</td>
                                    <input  hidden value="{{$v->valortotal}}" id="totalsegundarefeicoes">
                                @endforeach
                                @foreach($db_terca_refeicoes as $v)
                                    <td id="2"> {{$v->valortotal}}</td>
                                    <input  hidden value="{{$v->valortotal}}" id="totaltercarefeicoes">
                                @endforeach
                                @foreach($db_quarta_refeicoes as $v)
                                    <td id="3"> {{$v->valortotal}}</td>
                                    <input  hidden value="{{$v->valortotal}}" id="totalquartarefeicoes">
                                @endforeach
                                @foreach($db_quinta_refeicoes as $v)
                                    <td id="4"> {{$v->valortotal}}</td>
                                    <input  hidden value="{{$v->valortotal}}" id="totalquintarefeicoes">
                                @endforeach
                                @foreach($db_sexta_refeicoes as $v)
                                    <td id="5">{{$v->valortotal}}</td>
                                    <input  hidden value="{{$v->valortotal}}" id="totalsextarefeicoes">
                                @endforeach
                                @foreach($db_total_refeicoes as $v)
                                    <td class="green lighten-5" id="rt1">R$ {{$v->valortotal}}</td>
                                @endforeach
                            </tr>
                            <tr>
                                @foreach($despesa_refeicoes_in as $v)
                                    <td class="grey lighten-4">{{$v->conta_contabil}}</td>
                                @endforeach
                                <td>Refeições ( Internacional )</td>
                                @foreach($db_segunda_refeicoes_in as $v)
                                    <td id="1_in"> {{$v->valortotal}}</td>
                                    <input  hidden value="{{$v->valortotal}}" id="totalsegundarefeicoes_in">
                                @endforeach
                                @foreach($db_terca_refeicoes_in as $v)
                                    <td id="2_in"> {{$v->valortotal}}</td>
                                    <input  hidden value="{{$v->valortotal}}" id="totaltercarefeicoes_in">
                                @endforeach
                                @foreach($db_quarta_refeicoes_in as $v)
                                    <td id="3_in"> {{$v->valortotal}}</td>
                                    <input  hidden value="{{$v->valortotal}}" id="totalquartarefeicoes_in">
                                @endforeach
                                @foreach($db_quinta_refeicoes_in as $v)
                                    <td id="4_in"> {{$v->valortotal}}</td>
                                    <input  hidden value="{{$v->valortotal}}" id="totalquintarefeicoes_in">
                                @endforeach
                                @foreach($db_sexta_refeicoes_in as $v)
                                    <td id="5_in">{{$v->valortotal}}</td>
                                    <input  hidden value="{{$v->valortotal}}" id="totalsextarefeicoes_in">
                                @endforeach
                                @foreach($db_total_refeicoes_in as $v)
                                    <td class="green lighten-5" id="rt1_in">R$ {{$v->valortotal}}</td>
                                @endforeach
                            </tr>
                            <tr>
                                @foreach($despesa_presentes as $v)
                                    <td class="grey lighten-4">{{$v->conta_contabil}}</td>
                                @endforeach
                                <td>Presentes</td>
                                @foreach($db_segunda_presentes as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_terca_presentes as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quarta_presentes as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quinta_presentes as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_sexta_presentes as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_total_presentes as $v)
                                    <td class="green lighten-5">R$ {{$v->valortotal}}</td>
                                @endforeach
                            </tr>
                            <tr>
                                @foreach($despesa_veiculos as $v)
                                    <td class="grey lighten-4">{{$v->conta_contabil}}</td>
                                @endforeach
                                <td>Despesas com veículos</td>
                                @foreach($db_segunda_veiculos as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_terca_veiculos as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quarta_veiculos as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quinta_veiculos as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_sexta_veiculos as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_total_veiculos as $v)
                                    <td class="green lighten-5">R$ {{$v->valortotal}}</td>
                                @endforeach
                            </tr>
                            <tr>
                                @foreach($despesa_outras_viagens as $v)
                                    <td class="grey lighten-4">{{$v->conta_contabil}}</td>
                                @endforeach
                                <td>Despesas com viagens (Outros)</td>
                                @foreach($db_segunda_outras_viagens as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_terca_outras_viagens as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quarta_outras_viagens as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quinta_outras_viagens as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_sexta_outras_viagens as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_total_outras_viagens as $v)
                                    <td class="green lighten-5">R$ {{$v->valortotal}}</td>
                                @endforeach
                            </tr>
                            <tr>
                                @foreach($despesa_outras as $v)
                                    <td class="grey lighten-4">{{$v->conta_contabil}}</td>
                                @endforeach
                                <td>Despesas outros ( Não Viagens )</td>
                                @foreach($db_segunda_outras as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_terca_outras as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quarta_outras as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_quinta_outras as $v)
                                    <td> {{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_sexta_outras as $v)
                                    <td>{{$v->valortotal}}</td>
                                @endforeach
                                @foreach($db_total_outras as $v)
                                    <td class="green lighten-5">R$ {{$v->valortotal}}</td>
                                @endforeach
                            </tr>
                            </tbody>
                        </table>
                        <table class="fd-table content">
                            <thead>
                            <tr>
                                <th>Assinatura</th>
                                <td></td>
                                <th>Despesas Totais</th>
                                @foreach($db_total as $v)
                                <td class="green lighten-5 black-text">R$ {{$v->valortotal}}</td>
                                <input hidden value="{{$v->valortotal}}" name="valor_total_ext" id="valor_total_ext">
                                    @endforeach

                            </tr>
                            </thead>
                            <thead>
                            <tr>
                                <th></th>
                                <td></td>
                                <th>Adiantamento</th>
                                <td class="green lighten-5"></td>
                            </tr>
                            </thead>
                            <thead>
                            <tr>
                                <th>Assinatura / Aprovação Gerência</th>
                                <td></td>
                                <th>Diferença a devolver</th>
                                <td class="green lighten-5"></td>

                            </tr>
                            </thead>
                            <thead>
                            <tr>
                                <th>Km inicial</th>
                                <th>Km inicial</th>
                                <td></td>
                                <td class="green lighten-5"></td>
                            </tr>
                            </thead>
                            <thead>
                            </thead>
                        </table>
                    </div>
                    </form>
                    <div class="fd-panel__footer">
                                <button type="button" onclick="setTimeout(submmiter,1000);"id="pdfbutton" class="btn waves-effect" ><i class="material-icons">art_track</i></button>
                    </div>
                    <script>
                        function submmiter()
                        {
                            $('form').submit();
                            setTimeout(submmiter,1000)
                        }


                    </script>
                </div>
            </div>
        </div>
        <div class="row content">
            <div class="col s12 m12">
                <div class="fd-panel mgtop">
                    <div class="fd-panel__header">
                        <h3 class="fd-panel__title">
                            Detalhes das despesas
                        </h3>
                        <p class="fd-panel__description">
                            Exportação do relatório de despesas
                        </p>
                    </div>
                    <div class="fd-panel__body content" id="content1">
                        <table class="fd-table">
                            <thead>
                                <th>Data cupom</th>
                                <th>Dia</th>
                                <th>Descrição</th>
                                <th>Semana</th>
                                <th>Categoria</th>
                                <th>Valor Cupom</th>
                            </thead>
                            <tbody>
                                <tr>
                                @foreach($descricoes as $d)
                                <td>{{$d->data_cupom}}</td>
                                <td>{{$d->dia_semana}}</td>
                                <td>{{$d->descricao_cupom}}</td>
                                <td>{{$d->semana_mes}}</td>
                                <td>{{$d->categoria}}</td>

                                <td class="green lighten-5">{{$d->valor_cupom}}</td>
                            </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<script>
$('#pdfbutton').click(function() {
    var pdf = new jsPDF('landscape', 'pt', 'a4');
    $('#pdfbutton').addClass('hidden1');
    pdf.addHTML($('#content').get(), function(){
    pdf.addPage();
    var options = {
        pageslipt:true,
    }
    pdf.addHTML($('#content1').get(),options, function(){
        pdf.save("plan.pdf");
    });
});
});

$(document).ready(function(){
    {
    if($('#totalsegundahospedagembrasil').val() >= 270.01)
    {
            $('#h1').addClass('red lighten-4')
            M.toast({html: 'Os valores de hospedagem no dia de "Segunda-Feira" estão acima do permitido!', classes: 'black-text rounded yellow darken-2'});
            $('#ht1').removeClass('green lighten-5')
            $('#ht1').addClass('red lighten-5')

        }
    if($('#totaltercahospedagembrasil').val() >= 270.01)
    {
            $('#h2').addClass('red lighten-4')
            M.toast({html: 'Os valores de hospedagem no dia de "Terça-Feira" estão acima do permitido!', classes: 'black-text rounded yellow darken-2'});
            $('#ht1').removeClass('green lighten-5')
            $('#ht1').addClass('red lighten-5')

        }
    if($('#totalquartahospedagembrasil').val() >= 270.01)
    {
            $('#h3').addClass('red lighten-4')
            M.toast({html: 'Os valores de hospedagem no dia de "Quarta-Feira" estão acima do permitido!', classes: 'black-text rounded yellow darken-2'});
            $('#ht1').removeClass('green lighten-5')
            $('#ht1').addClass('red lighten-5')

   }
    if($('#totalquintahospedagembrasil').val() >= 270.01)
    {
            $('#h4').addClass('red lighten-4')
            M.toast({html: 'Os valores de hospedagem no dia de "Quinta-Feira" estão acima do permitido!', classes: 'black-text rounded yellow darken-2'});
            $('#ht1').removeClass('green lighten-5')
            $('#ht1').addClass('red lighten-5')
        }
    if($('#totalsextahospedagembrasil').val() >= 270.01)
    {
            $('#h5').addClass('red lighten-4')
            M.toast({html: 'Os valores de hospedagem no dia de "Sexta-Feira" estão acima do permitido!', classes: 'black-text rounded yellow darken-2'});
            $('#ht1').removeClass('green lighten-5')
            $('#ht1').addClass('red lighten-5')
    }
    if($('#totalsegundarefeicoes').val() >= 80.01)
    {
            $('#1').addClass('red lighten-4')
            M.toast({html: 'Os valores de refeições no dia de "Segunda-Feira" estão acima do permitido!', classes: 'black-text rounded yellow darken-2'});
            $('#rt1').removeClass('green lighten-5')
            $('#rt1').addClass('red lighten-5')

        }
    if($('#totaltercarefeicoes').val() >= 80.01)
    {
            $('#2').addClass('red lighten-4')
            M.toast({html: 'Os valores de refeições no dia de "Terça-Feira" estão acima do permitido!', classes: 'black-text rounded yellow darken-2'});
            $('#rt1').removeClass('green lighten-5')
            $('#rt1').addClass('red lighten-5')
        }
    if($('#totalquartarefeicoes').val() >= 80.01)
    {
            $('#3').addClass('red lighten-4')
            M.toast({html: 'Os valores de refeições no dia de "Quarta-Feira" estão acima do permitido!', classes: 'black-text rounded yellow darken-2'});
            $('#rt1').removeClass('green lighten-5')
            $('#rt1').addClass('red lighten-5')
        }
    if($('#totalquintarefeicoes').val() >= 80.01)
    {
            $('#4').addClass('red lighten-4')
            M.toast({html: 'Os valores de refeições no dia de "Quinta-Feira" estão acima do permitido!', classes: 'black-text rounded yellow darken-2'});
            $('#rt1').removeClass('green lighten-5')
            $('#rt1').addClass('red lighten-5')
        }
    if($('#totalsextarefeicoes').val() >= 80.01)
    {
            $('#5').addClass('red lighten-4')
            M.toast({html: 'Os valores de refeições no dia de "Sexta-Feira" estão acima do permitido!', classes: 'black-text rounded yellow darken-2'});
            $('#rt1').removeClass('green lighten-5')
            $('#rt1').addClass('red lighten-5')
    }
    if($('#totalsegundarefeicoes_in').val() >= 80.01)
    {
            $('#1_in').addClass('red lighten-4')
            M.toast({html: 'Os valores de "refeições internacionais" no dia de "Segunda-Feira" estão acima do permitido!', classes: 'black-text rounded yellow darken-2'});
            $('#rt1_in').removeClass('green lighten-5')
            $('#rt1_in').addClass('red lighten-5')

        }
    if($('#totaltercarefeicoes_in').val() >= 80.01)
    {
            $('#2_in').addClass('red lighten-4')
            M.toast({html: 'Os valores de "refeições internacionais" no dia de "Terça-Feira" estão acima do permitido!', classes: 'black-text rounded yellow darken-2'});
            $('#rt1_in').removeClass('green lighten-5')
            $('#rt1_in').addClass('red lighten-5')
        }
    if($('#totalquartarefeicoes_in').val() >= 80.01)
    {
            $('#3_in').addClass('red lighten-4')
            M.toast({html: 'Os valores de "refeições internacionais" no dia de "Quarta-Feira" estão acima do permitido!', classes: 'black-text rounded yellow darken-2'});
            $('#rt1_in').removeClass('green lighten-5')
            $('#rt1_in').addClass('red lighten-5')
        }
    if($('#totalquintarefeicoes_in').val() >= 80.01)
    {
            $('#4_in').addClass('red lighten-4')
            M.toast({html: 'Os valores de "refeições internacionais" no dia de "Quinta-Feira" estão acima do permitido!', classes: 'black-text rounded yellow darken-2'});
            $('#rt1_in').removeClass('green lighten-5')
            $('#rt1_in').addClass('red lighten-5')
        }
    if($('#totalsextarefeicoes_in').val() >= 80.01)
    {
            $('#5_in').addClass('red lighten-4')
            M.toast({html: 'Os valores de "refeições internacionais" no dia de "Sexta-Feira" estão acima do permitido!', classes: 'black-text rounded yellow darken-2'});
            $('#rt1_in').removeClass('green lighten-5')
            $('#rt1_in').addClass('red lighten-5')
    }
        }
    })


</script>
<style>
    .hidden1
    {
        display: none;
    }
    .content {
        font-size: 15px;
        background-color: white;
    }

</style>
@endsection
