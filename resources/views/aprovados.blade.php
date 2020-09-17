@can('view', App\Customer::class)
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
                                Relatórios aprovados
                            </h3>
                            <p class="fd-panel__description">
                                Descrição de relatórios aprovados ordenados por semana.
                            </p>
                        </div>
                        <div class="fd-panel__actions">
                            {{\Carbon\Carbon::now()->format('d-m-Y')}}
                        </div>
                        <div class="col s2 m2">
                            <div class="fd-form__set">
                                <label for="semana_mes" class="fd-form__label">Semana
                                    <span
                                        class="fd-inline-help fd-has-float-right">
                                        <span
                                            class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                            Selecione a semana ser analisada!
                                        </span>
                                    </span>
                                </label>
                                <script>
                                    $(document).ready(function () {
                                  $('#semana_mes').change(function () {
                                      window.location = 'http://127.0.0.1:8000/aprovados/' + $(this).val();
                                  })
                                });
                                </script>
                                <div class="fd-form__item">
                                    <select class="fd-form__control" id="semana_mes" name="semana_mes">
                                        <option id="oldvalue_1">Selecione a semana</option>
                                                @foreach($semana_mes as $s)
                                               <option value="{{$s->semana_mes}}">{{$s->semana_mes}}</option>
                                                @endforeach
                                            </select>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="fd-panel__body content">

                   <table class="fd-table">

                       <thead>
                           <tr>
                               <td>Nome</td>
                               <td>Data de aprovação / semana referência</td>
                               <td>Valor R$</td>
                           </tr>
                       </thead>
                        @foreach($retrieve as $r)
                       <tbody>
                        <tr>
                            <td>{{$r->nome_funcionario}}</td>
                            <td>{{$r->data_input}} // <b>{{$r->semana_mes}}</b></td>
                            <td class="green lighten-5">{{$r->total}}</td>
                        </tr>
                       </tbody>
                       @endforeach
                   </table>
                   </div>
                    <div class="fd-panel__footer">
                    </div>

                </div>
            </div>
        </div>
</div>
@endsection
@endcan
