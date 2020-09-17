@extends('layouts.app')

@section('content')
<script>
    $(document).ready(function() {
    if($(window).width() <= 650) {
        window.location.href="http://127.0.0.1:8000/mobile" ;
    }
});
</script>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if ($errors->any())
                    <div class="alert alert-danger" style="margin-top: 2rem">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (\Session::has('Success'))
                    <div class="col s12 m12 right">
                        <script> $(document).ready(function () {
                                M.toast({html: 'Cadastro concluído com sucesso!', classes: 'rounded blue darken-2'});
                            })
                        </script>
                    </div>
                @endif
                <div class="col s12 m12">
                    <div class="fd-panel mgtop">
                        <div class="fd-panel__header">
                            <div class="fd-panel__head">
                                <h3 class="fd-panel__title">
                                    Formulário
                                </h3>
                                <p class="fd-panel__description">
                                    Preenchimento do formulário RDV
                                </p>
                            </div>
                            <div class="fd-panel__actions">
                                {{\Carbon\Carbon::now()->format('d-m-Y')}}
                            </div>
                        </div>
                        <div class="fd-panel__body">
                            <!--Despesas aéreas-->
                            <div class="row mbg0">
                                <div class="col s12 m12">
                                    <form method="GET" action="{{url('/post_rdv')}}">
                                        <ul id="slide-out" class="col s12 m12">
                                            <li class="no-padding">
                                                <ul class="collapsible collapsible-accordion">
                                                    <li class="">
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Despesas
                                                            aéreas - Brasil
                                                            @foreach($vt as $v)
                                                                <i class="" id="showconfirm">cloud_done</i>
                                                                <input
                                                                    class="fd-form__control col s4 m2 maskmoney"
                                                                    data-thousands="," data-prefix="R$"
                                                                    id="valor_total_aerea_brasil"
                                                                    name="valor_total_aerea_brasil[]"
                                                                    value="R${{$v->valortotal}}" disabled>
                                                            @endforeach
                                                        </p>
                                                        <?php $i = 0;?>
                                                        <script>


                                                            $(document).ready(function () {
                                                                $('#semana_mes').val
                                                                (parseFloat({{\Carbon\Carbon::now()->weekOfYear}}) - parseFloat(1))
                                                            })
                                                        </script>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s4 m5">
                                                                        <h6 class="fd-panel__description">Nome
                                                                            : {{Auth::user()->name}}</h6>
                                                                        <p class="fd-panel__description">  Data de preenchimento
                                                                            : {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                                                                    </div>
                                                                    <div class="col s4 m5">

                                                                        <p>C/C : {{Auth::user()->conta_contabil}}</p>
                                                                        @foreach($db1 as $v)
                                                                            <p>Conta
                                                                                Contábil: {{$v->conta_contabil}}</p>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="col s6 m2">
                                                                    <label class="fd-form__label" for="Data">
                                                                        Data do cupom
                                                                        <span
                                                                            class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-right">
                                                                                        Data do cupom para reembolso
                                                                                </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="date" class="" id="data_cupom{{$i}}"
                                                                           name="data_cupom[]" required>
                                                                </div>
                                                                <div class="col s6 m4">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Descrição
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Descrição do uso dos recursos.
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text" class="fd-form__control"
                                                                               id="descricao_cupom{{$i}}"
                                                                               name="descricao_cupom[]"
                                                                               placeholder="Descrição" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Valor
                                                                            R$
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Valor do cupom descrito
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text"
                                                                               class="fd-form__control maskmoney"
                                                                               id="valor_cupom{{$i}}"
                                                                               name="valor_cupom[]"
                                                                               placeholder="R$" required
                                                                               data-thousands="" data-decimal=".">
                                                                    </div>
                                                                </div>
                                                                <input id="qrcodeval" name="qrcodeval[]" class="class"
                                                                       value="" hidden>
                                                                <!--modal-->
                                                                <div id="modal1" class="modal col s4 m4">
                                                                    <div class="modal-content center">
                                                                        <video id="preview"
                                                                               style="width: 230px;height:100%;"></video>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="#!" id="btnc"
                                                                           class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                                                                    </div>
                                                                </div>
                                                                <!--modal-->
                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            data-target="modal1"
                                                                            class="modal-trigger btn-floating blue darken-2"
                                                                            id="qrcode" type="button" href="#modal1"><i
                                                                                class="material-icons"
                                                                                onclick="qrcodescan();">qr_code</i>
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button1 add_field_button blue darken-2"
                                                                            id="button_id1" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper1" class="i_wrapper1">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <button
                                                                        class="right fd-button--emphasized waves-light waves-effect"
                                                                        type="submit">Salvar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php $i++;?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!--Despesas aéreas-->

                            <!--Despesas aéreas externas-->
                            <div class="row mbg0">
                                <div class="col s12 m12">
                                    <form method="GET" action="{{url('/post_rdv_ext')}}">
                                        <ul id="slide-out" class="col s12 m12">
                                            <li class="no-padding">
                                                <ul class="collapsible collapsible-accordion"
                                                    onclick="warndespext(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Despesas
                                                            aéreas - Exterior
                                                            <i class="" id="showconfirm2">cloud_done</i>
                                                            @foreach($vtotal as $v)
                                                                <input
                                                                    class="fd-form__control col s4 m2 maskmoney"
                                                                    data-thousands="," data-prefix="R$"
                                                                    id="valor_total_aerea_brasil2"
                                                                    name="valor_total_aerea_brasil[]"
                                                                    value="R${{$v->valortotal}}" disabled>
                                                            @endforeach
                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s4 m5">
                                                                        <h6 class="fd-panel__description">Nome
                                                                            : {{Auth::user()->name}}</h6>
                                                                        <p class="fd-panel__description">  Data de preenchimento
                                                                            : {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                                                                    </div>
                                                                    <div class="col s4 m5">
                                                                        <p>C/C : {{Auth::user()->conta_contabil}}</p>
                                                                        @foreach($db2 as $v)
                                                                            <p>Conta
                                                                                Contábil: {{$v->conta_contabil}}</p>
                                                                        @endforeach
                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="col s6 m2">
                                                                    <label class="fd-form__label" for="Data">
                                                                        Data do cupom
                                                                        <span
                                                                            class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Data do cupom para reembolso
                                                                                </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="date" class="" id="data_cupom{{$i}}"
                                                                           name="data_cupom[]" required>
                                                                </div>
                                                                <div class="col s6 m4">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Descrição
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Descrição do uso dos recursos.
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text" class="fd-form__control"
                                                                               id="descricao_cupom{{$i}}"
                                                                               name="descricao_cupom[]"
                                                                               placeholder="Descrição" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Valor
                                                                            R$
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Valor do cupom descrito
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text"
                                                                               class="fd-form__control maskmoney"
                                                                               id="valor_cupom{{$i}}"
                                                                               name="valor_cupom[]"
                                                                               placeholder="R$" required
                                                                               data-thousands="" data-decimal=".">
                                                                    </div>
                                                                </div>
                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_ext blue darken-2"
                                                                            id="button_id" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_ext" class="i_wrapper_ext">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <button
                                                                        class="right fd-button--emphasized waves-light waves-effect"
                                                                        type="submit">Salvar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php $i++;?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!--Despesas aéreas externas-->

                            <!--Táxi, onibus, balsa /carro alugado -->
                            <div class="row mbg0">
                                <div class="col s12 m12">
                                    <form method="GET" action="{{url('/post_rdv_taxi')}}">
                                        <ul id="slide-out" class="col s12 m12">
                                            <li class="no-padding">
                                                <ul class="collapsible collapsible-accordion"
                                                    onclick="warndesptaxi(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Táxi,
                                                            onibus, balsa /carro alugado
                                                            @foreach($vtotaltaxi as $v)
                                                                <i class="" id="showconfirm3">cloud_done</i>

                                                                <input
                                                                    class="fd-form__control col s4 m2 maskmoney"
                                                                    data-thousands="," data-prefix="R$"
                                                                    id="valor_total_aerea_brasil3"
                                                                    name="valor_total_aerea_brasil[]"
                                                                    value="R${{$v->valortotal}}" disabled>
                                                            @endforeach
                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s4 m5">
                                                                        <h6 class="fd-panel__description">Nome
                                                                            : {{Auth::user()->name}}</h6>
                                                                        <p class="fd-panel__description">  Data de preenchimento
                                                                            : {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                                                                    </div>
                                                                    <div class="col s4 m5">
                                                                        <p>C/C : {{Auth::user()->conta_contabil}}</p>
                                                                        @foreach($db3 as $v)
                                                                            <p>Conta
                                                                                Contábil: {{$v->conta_contabil}}</p>
                                                                        @endforeach
                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="col s6 m2">
                                                                    <label class="fd-form__label" for="Data">
                                                                        Data do cupom
                                                                        <span
                                                                            class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Data do cupom para reembolso
                                                                                </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="date" class="" id="data_cupom{{$i}}"
                                                                           name="data_cupom[]" required>
                                                                </div>
                                                                <div class="col s6 m4">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Descrição
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Descrição do uso dos recursos.
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text" class="fd-form__control"
                                                                               id="descricao_cupom{{$i}}"
                                                                               name="descricao_cupom[]"
                                                                               placeholder="Descrição" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Valor
                                                                            R$
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Valor do cupom descrito
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text"
                                                                               class="fd-form__control maskmoney"
                                                                               id="valor_cupom{{$i}}"
                                                                               name="valor_cupom[]"
                                                                               placeholder="R$" required
                                                                               data-thousands="" data-decimal=".">
                                                                    </div>
                                                                </div>
                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_tax blue darken-2"
                                                                            id="button_id" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_tax" class="i_wrapper_tax">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <button
                                                                        class="right fd-button--emphasized waves-light waves-effect"
                                                                        type="submit">Salvar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php $i++;?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!--5. Táxi, onibus, balsa /carro alugado -->

                            <!--Estacionamento / Pedagio -->
                            <div class="row mbg0">
                                <div class="col s12 m12">
                                    <form method="GET" action="{{url('/post_rdv_estacionamento')}}">
                                        <ul id="slide-out" class="col s12 m12">
                                            <li class="no-padding">
                                                <ul class="collapsible collapsible-accordion"
                                                    onclick="warndespestacionamento(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Estacionamento
                                                            / Pedágio
                                                            <i class="" id="showconfirm4">cloud_done</i>
                                                            @foreach($vtotalestacionamento as $v)
                                                                <input
                                                                    class="fd-form__control col s4 m2 maskmoney"
                                                                    data-thousands="," data-prefix="R$"
                                                                    id="valor_total_aerea_brasil4"
                                                                    name="valor_total_aerea_brasil[]"
                                                                    value="R${{$v->valortotal}}" disabled>
                                                            @endforeach
                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s4 m5">
                                                                        <h6 class="fd-panel__description">Nome
                                                                            : {{Auth::user()->name}}</h6>
                                                                        <p class="fd-panel__description">  Data de preenchimento
                                                                            : {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                                                                    </div>
                                                                    <div class="col s4 m5">
                                                                        <p>C/C : {{Auth::user()->conta_contabil}}</p>
                                                                        @foreach($db4 as $v)
                                                                            <p>Conta
                                                                                Contábil: {{$v->conta_contabil}}</p>
                                                                        @endforeach
                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="col s6 m2">
                                                                    <label class="fd-form__label" for="Data">
                                                                        Data do cupom
                                                                        <span
                                                                            class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Data do cupom para reembolso
                                                                                </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="date" class="" id="data_cupom{{$i}}"
                                                                           name="data_cupom[]" required>
                                                                </div>
                                                                <div class="col s6 m4">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Descrição
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Descrição do uso dos recursos.
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text" class="fd-form__control"
                                                                               id="descricao_cupom{{$i}}"
                                                                               name="descricao_cupom[]"
                                                                               placeholder="Descrição" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Valor
                                                                            R$
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Valor do cupom descrito
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text"
                                                                               class="fd-form__control maskmoney"
                                                                               id="valor_cupom{{$i}}"
                                                                               name="valor_cupom[]"
                                                                               placeholder="R$" required
                                                                               data-thousands="" data-decimal=".">
                                                                    </div>
                                                                </div>
                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_est blue darken-2"
                                                                            id="button_id" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_est" class="i_wrapper_est">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <button
                                                                        class="right fd-button--emphasized waves-light waves-effect"
                                                                        type="submit">Salvar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php $i++;?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!--Estacionamento / Pedagio-->

                            <!--Combustivel-->
                            <div class="row mbg0">
                                <div class="col s12 m12">
                                    <form method="GET" action="{{url('/post_rdv_combustivel')}}">
                                        <ul id="slide-out" class="col s12 m12">
                                            <li class="no-padding">
                                                <ul class="collapsible collapsible-accordion"
                                                    onclick="warndespcombustivel(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Combustivel
                                                            @foreach($vtotalcombustivel as $v)
                                                                <i class="" id="showconfirm5">cloud_done</i>
                                                                <input
                                                                    class="fd-form__control col s4 m2 maskmoney"
                                                                    data-thousands="," data-prefix="R$"
                                                                    id="valor_total_aerea_brasil5"
                                                                    name="valor_total_aerea_brasil[]"
                                                                    value="R${{$v->valortotal}}" disabled>
                                                            @endforeach
                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s4 m5">
                                                                        <h6 class="fd-panel__description">Nome
                                                                            : {{Auth::user()->name}}</h6>
                                                                        <p class="fd-panel__description">  Data de preenchimento
                                                                            : {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                                                                    </div>
                                                                    <div class="col s4 m5">
                                                                        <p>C/C : {{Auth::user()->conta_contabil}}</p>
                                                                        @foreach($db5 as $v)
                                                                            <p>Conta
                                                                                Contábil: {{$v->conta_contabil}}</p>
                                                                        @endforeach

                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="col s6 m2">
                                                                    <label class="fd-form__label" for="Data">
                                                                        Data do cupom
                                                                        <span
                                                                            class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Data do cupom para reembolso
                                                                                </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="date" class="" id="data_cupom{{$i}}"
                                                                           name="data_cupom[]" required>
                                                                </div>
                                                                <div class="col s6 m4">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Descrição
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Descrição do uso dos recursos.
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text" class="fd-form__control"
                                                                               id="descricao_cupom{{$i}}"
                                                                               name="descricao_cupom[]"
                                                                               placeholder="Descrição" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Valor
                                                                            R$
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Valor do cupom descrito
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text"
                                                                               class="fd-form__control maskmoney"
                                                                               id="valor_cupom{{$i}}"
                                                                               name="valor_cupom[]"
                                                                               placeholder="R$" required
                                                                               data-thousands="" data-decimal=".">
                                                                    </div>
                                                                </div>
                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_com blue darken-2"
                                                                            id="button_id" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_com" class="i_wrapper_com">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <button
                                                                        class="right fd-button--emphasized waves-light waves-effect"
                                                                        type="submit">Salvar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php $i++;?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!--Combustivel-->

                            <!--Correio-->
                            <div class="row mbg0">
                                <div class="col s12 m12">
                                    <form method="GET" action="{{url('/post_rdv_correio')}}">
                                        <ul id="slide-out" class="col s12 m12">
                                            <li class="no-padding">
                                                <ul class="collapsible collapsible-accordion"
                                                    onclick="warndespcorreio(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Correio
                                                            @foreach($vtotalcorreio as $v)
                                                                <i class="" id="showconfirm6">cloud_done</i>
                                                                <input
                                                                    class="fd-form__control col s4 m2 maskmoney"
                                                                    data-thousands="," data-prefix="R$"
                                                                    id="valor_total_aerea_brasil6"
                                                                    name="valor_total_aerea_brasil[]"
                                                                    value="R${{$v->valortotal}}" disabled>
                                                            @endforeach

                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s4 m5">
                                                                        <h6 class="fd-panel__description">Nome
                                                                            : {{Auth::user()->name}}</h6>
                                                                        <p class="fd-panel__description">  Data de preenchimento
                                                                            : {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                                                                    </div>
                                                                    <div class="col s4 m5">
                                                                        <p>C/C : {{Auth::user()->conta_contabil}}</p>
                                                                        @foreach($db6 as $v)
                                                                            <p>Conta
                                                                                Contábil: {{$v->conta_contabil}}</p>
                                                                        @endforeach

                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="col s6 m2">
                                                                    <label class="fd-form__label" for="Data">
                                                                        Data do cupom
                                                                        <span
                                                                            class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Data do cupom para reembolso
                                                                                </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="date" class="" id="data_cupom{{$i}}"
                                                                           name="data_cupom[]" required>
                                                                </div>
                                                                <div class="col s6 m4">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Descrição
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Descrição do uso dos recursos.
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text" class="fd-form__control"
                                                                               id="descricao_cupom{{$i}}"
                                                                               name="descricao_cupom[]"
                                                                               placeholder="Descrição" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Valor
                                                                            R$
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Valor do cupom descrito
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text"
                                                                               class="fd-form__control maskmoney"
                                                                               id="valor_cupom{{$i}}"
                                                                               name="valor_cupom[]"
                                                                               placeholder="R$" required
                                                                               data-thousands="" data-decimal=".">
                                                                    </div>
                                                                </div>
                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_cor blue darken-2"
                                                                            id="button_id" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_cor" class="i_wrapper_cor">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <button
                                                                        class="right fd-button--emphasized waves-light waves-effect"
                                                                        type="submit">Salvar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php $i++;?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!--Correio-->

                            <!--Telefone-->
                            <div class="row mbg0">
                                <div class="col s12 m12">
                                    <form method="GET" action="{{url('/post_rdv_telefone')}}">
                                        <ul id="slide-out" class="col s12 m12">
                                            <li class="no-padding">
                                                <ul class="collapsible collapsible-accordion"
                                                    onclick="warndesptelefone(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Telefone,
                                                            Fax, Internet
                                                            @foreach($vtotaltelefone as $v)
                                                                <i class="" id="showconfirm7">cloud_done</i>

                                                                <input
                                                                    class="fd-form__control col s4 m2 maskmoney"
                                                                    data-thousands="," data-prefix="R$"
                                                                    id="valor_total_aerea_brasil7"
                                                                    name="valor_total_aerea_brasil[]"
                                                                    value="R${{$v->valortotal}}" disabled>
                                                            @endforeach

                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s4 m5">
                                                                        <h6 class="fd-panel__description">Nome
                                                                            : {{Auth::user()->name}}</h6>
                                                                        <p class="fd-panel__description">  Data de preenchimento
                                                                            : {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                                                                    </div>
                                                                    <div class="col s4 m5">
                                                                        <p>C/C : {{Auth::user()->conta_contabil}}</p>
                                                                        @foreach($db6 as $v)
                                                                            <p>Conta
                                                                                Contábil: {{$v->conta_contabil}}</p>
                                                                        @endforeach

                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="col s6 m2">
                                                                    <label class="fd-form__label" for="Data">
                                                                        Data do cupom
                                                                        <span
                                                                            class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Data do cupom para reembolso
                                                                                </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="date" class="" id="data_cupom{{$i}}"
                                                                           name="data_cupom[]" required>
                                                                </div>
                                                                <div class="col s6 m4">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Descrição
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Descrição do uso dos recursos.
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text" class="fd-form__control"
                                                                               id="descricao_cupom{{$i}}"
                                                                               name="descricao_cupom[]"
                                                                               placeholder="Descrição" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Valor
                                                                            R$
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Valor do cupom descrito
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text"
                                                                               class="fd-form__control maskmoney"
                                                                               id="valor_cupom{{$i}}"
                                                                               name="valor_cupom[]"
                                                                               placeholder="R$" required
                                                                               data-thousands="" data-decimal=".">
                                                                    </div>
                                                                </div>
                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_tel blue darken-2"
                                                                            id="button_id" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_tel" class="i_wrapper_tel">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <button
                                                                        class="right fd-button--emphasized waves-light waves-effect"
                                                                        type="submit">Salvar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php $i++;?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!--Telefone-->

                            <!--HospedagemBrasil-->
                            <div class="row mbg0">
                                <div class="col s12 m12">
                                    <form method="GET" action="{{url('/post_rdv_hospedagem_brasil')}}">
                                        <ul id="slide-out" class="col s12 m12">
                                            <li class="no-padding">
                                                <ul class="collapsible collapsible-accordion"
                                                    onclick="warndesphospbrasil(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Hospedagem
                                                            -Brasil c/ café da manhã
                                                            @foreach($vtotalhotelbrasil as $v)
                                                                <i class="" id="showconfirm8">cloud_done</i>
                                                                <input
                                                                    class="fd-form__control col s4 m2 maskmoney"
                                                                    data-thousands="," data-prefix="R$"
                                                                    id="valor_total_aerea_brasil8"
                                                                    name="valor_total_aerea_brasil[]"
                                                                    value="R${{$v->valortotal}}" disabled>
                                                            @endforeach

                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s4 m5">
                                                                        <h6 class="fd-panel__description">Nome
                                                                            : {{Auth::user()->name}}</h6>
                                                                        <p class="fd-panel__description">  Data de preenchimento
                                                                            : {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                                                                    </div>
                                                                    <div class="col s4 m5">
                                                                        <p>C/C : {{Auth::user()->conta_contabil}}</p>
                                                                        @foreach($db8 as $v)
                                                                            <p>Conta
                                                                                Contábil: {{$v->conta_contabil}}</p>
                                                                        @endforeach

                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="col s6 m2">
                                                                    <label class="fd-form__label" for="Data">
                                                                        Data do cupom
                                                                        <span
                                                                            class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Data do cupom para reembolso
                                                                                </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="date" class="" id="data_cupom{{$i}}"
                                                                           name="data_cupom[]" required>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <label class="fd-form__label" for="Data">
                                                                        Capital ?
                                                                        <span
                                                                            class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Categoria de cidade
                                                                                </span>
                                                                        </span>
                                                                    </label>
                                                                    <select id="capital{{$i}}" name="capital[]">
                                                                        <option value="Capital">Capital</option>
                                                                        <option value="Não capital">Não capital</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col s6 m4">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Descrição
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Descrição do uso dos recursos.
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text" class="fd-form__control"
                                                                               id="descricao_cupom{{$i}}"
                                                                               name="descricao_cupom[]"
                                                                               placeholder="Descrição" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Valor
                                                                            R$
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Valor do cupom descrito
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text"
                                                                               class="fd-form__control maskmoney limitclass"
                                                                               id="valor_cupom{{$i}}"
                                                                               name="valor_cupom[]"
                                                                               placeholder="R$" required
                                                                               data-thousands="" maxlength="230.00"
                                                                               data-decimal=".">
                                                                    </div>
                                                                </div>
                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_hosb blue darken-2"
                                                                            id="button_id" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_hosb" class="i_wrapper_hosb">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <button
                                                                        class="right fd-button--emphasized waves-light waves-effect"
                                                                        type="submit">Salvar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php $i++;?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!--HospedagemBrasil-->

                            <!--Hospedagem -Exterior-->
                            <div class="row mbg0">
                                <div class="col s12 m12">
                                    <form method="GET" action="{{url('/post_rdv_hospedagem_exterior')}}">
                                        <ul id="slide-out" class="col s12 m12">
                                            <li class="no-padding">
                                                <ul class="collapsible collapsible-accordion"
                                                    onclick="warndesphospext(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Hospedagem
                                                            -Exterior c/ café da manhã
                                                            @foreach($vtotalhotelexterior as $v)
                                                                <i class="" id="showconfirm9">cloud_done</i>
                                                                <input
                                                                    class="fd-form__control col s4 m2 maskmoney"
                                                                    data-thousands="," data-prefix="R$"
                                                                    id="valor_total_aerea_brasil9"
                                                                    name="valor_total_aerea_brasil[]"
                                                                    value="R${{$v->valortotal}}" disabled>
                                                            @endforeach

                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s4 m5">
                                                                        <h6 class="fd-panel__description">Nome
                                                                            : {{Auth::user()->name}}</h6>
                                                                        <p class="fd-panel__description">  Data de preenchimento
                                                                            : {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                                                                    </div>
                                                                    <div class="col s4 m5">
                                                                        <p>C/C : {{Auth::user()->conta_contabil}}</p>
                                                                        @foreach($db8 as $v)
                                                                            <p>Conta
                                                                                Contábil: {{$v->conta_contabil}}</p>
                                                                        @endforeach

                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="col s6 m2">
                                                                    <label class="fd-form__label" for="Data">
                                                                        Data do cupom
                                                                        <span
                                                                            class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Data do cupom para reembolso
                                                                                </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="date" class="" id="data_cupom{{$i}}"
                                                                           name="data_cupom[]" required>
                                                                </div>
                                                                <div class="col s6 m4">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Descrição
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Descrição do uso dos recursos.
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text" class="fd-form__control"
                                                                               id="descricao_cupom{{$i}}"
                                                                               name="descricao_cupom[]"
                                                                               placeholder="Descrição" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Valor
                                                                            R$
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Valor do cupom descrito
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text"
                                                                               class="fd-form__control maskmoney"
                                                                               id="valor_cupom{{$i}}"
                                                                               name="valor_cupom[]"
                                                                               placeholder="R$" required
                                                                               data-thousands="" data-decimal=".">
                                                                    </div>
                                                                </div>
                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_hose blue darken-2"
                                                                            id="button_id" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_hose" class="i_wrapper_hose">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <button
                                                                        class="right fd-button--emphasized waves-light waves-effect"
                                                                        type="submit">Salvar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php $i++;?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!--Hospedagem -Exterior-->

                            <!--Convite-->
                            <div class="row mbg0">
                                <div class="col s12 m12">
                                    <form method="GET" action="{{url('/post_rdv_convite')}}">
                                        <ul id="slide-out" class="col s12 m12">
                                            <li class="no-padding">
                                                <ul class="collapsible collapsible-accordion"
                                                    onclick="warndespconvite(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Convite
                                                            @foreach($vtotalconvite as $v)
                                                                <i class="" id="showconfirm10">cloud_done</i>
                                                                <input
                                                                    class="fd-form__control col s4 m2 maskmoney"
                                                                    data-thousands="," data-prefix="R$"
                                                                    id="valor_total_aerea_brasil10"
                                                                    name="valor_total_aerea_brasil[]"
                                                                    value="R${{$v->valortotal}}" disabled>
                                                            @endforeach

                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s4 m5">
                                                                        <h6 class="fd-panel__description">Nome
                                                                            : {{Auth::user()->name}}</h6>
                                                                        <p class="fd-panel__description">  Data de preenchimento
                                                                            : {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                                                                    </div>
                                                                    <div class="col s4 m5">
                                                                        <p>C/C : {{Auth::user()->conta_contabil}}</p>
                                                                        @foreach($db9 as $v)
                                                                            <p>Conta
                                                                                Contábil: {{$v->conta_contabil}}</p>
                                                                        @endforeach

                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>

                                                                <div class="row">
                                                                    <div class="col s6 m2">
                                                                        <label class="fd-form__label" for="Data">
                                                                            Data
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                            <span
                                                                                class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                    Data do cupom para reembolso
                                                                            </span>
                                                                    </span>
                                                                        </label>
                                                                        <input type="date" class=""
                                                                               id="data_cupom{{$i}}"
                                                                               name="data_cupom[]" required>
                                                                    </div>
                                                                    <div class="col s6 m2">
                                                                        <div class="fd-form__item">
                                                                            <label class="fd-form__label"
                                                                                   for="OatmD552">Número de convidados
                                                                                <span
                                                                                    class="fd-inline-help fd-has-float-right">
                                                                            <span
                                                                                class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                    Número de convidados.
                                                                            </span>
                                                                    </span>
                                                                            </label>
                                                                            <select name="convidados[]"
                                                                                    id="convidados{{$i}}">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col s6 m2">
                                                                        <div class="fd-form__item">
                                                                            <label class="fd-form__label"
                                                                                   for="OatmD552">Cidade
                                                                                <span
                                                                                    class="fd-inline-help fd-has-float-right">
                                                                            <span
                                                                                class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                    Capital ?.
                                                                            </span>
                                                                    </span>
                                                                            </label>
                                                                            <select name="capital[]" id="capital{{$i}}">
                                                                                <option value="Capital">Capital</option>
                                                                                <option value="Não capital">Não
                                                                                    capital
                                                                                </option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col s6 m2">
                                                                        <div class="fd-form__item">
                                                                            <label class="fd-form__label"
                                                                                   for="OatmD552">Refeição
                                                                                <span
                                                                                    class="fd-inline-help fd-has-float-right">
                                                                            <span
                                                                                class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                    Descrição do uso dos recursos.
                                                                            </span>
                                                                    </span>
                                                                            </label>
                                                                            <select id="refeicao{{$i}}"
                                                                                    name="refeicao[]">
                                                                                <option value="Almoço">Almoço</option>
                                                                                <option value="Jantar">Jantar</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col s6 m4">
                                                                        <div class="fd-form__item">
                                                                            <label class="fd-form__label"
                                                                                   for="OatmD552">Descrição
                                                                                <span
                                                                                    class="fd-inline-help fd-has-float-right">
                                                                            <span
                                                                                class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                    Descrição do uso dos recursos.
                                                                            </span>
                                                                    </span>
                                                                            </label>
                                                                            <input type="text" class="fd-form__control"
                                                                                   id="descricao_cupom{{$i}}"
                                                                                   name="descricao_cupom[]"
                                                                                   placeholder="Descrição" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s6 m2">
                                                                        <div class="fd-form__item">
                                                                            <label class="fd-form__label"
                                                                                   for="OatmD552">Valor
                                                                                R$
                                                                                <span
                                                                                    class="fd-inline-help fd-has-float-right">
                                                                            <span
                                                                                class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                    Valor do cupom descrito
                                                                            </span>
                                                                    </span>
                                                                            </label>
                                                                            <input type="text"
                                                                                   class="fd-form__control maskmoney"
                                                                                   id="valor_cupom{{$i}}"
                                                                                   name="valor_cupom[]"
                                                                                   placeholder="R$" required
                                                                                   data-thousands="" data-decimal=".">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col s4 m2">
                                                                        <div class="fd-form__item">
                                                                            <br>
                                                                            <button
                                                                                class="btn-floating add_field_button_con blue darken-2"
                                                                                id="button_id" type="reset"><i
                                                                                    class="material-icons">add</i>
                                                                                OK
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_con" class="i_wrapper_con">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <button
                                                                        class="right fd-button--emphasized waves-light waves-effect"
                                                                        type="submit">Salvar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php $i++;?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!--Convite-->

                            <!--Refeições-->
                            <div class="row mbg0">
                                <div class="col s12 m12">
                                    <form method="GET" action="{{url('/post_rdv_refeicoes')}}">
                                        <ul id="slide-out" class="col s12 m12">
                                            <li class="no-padding">
                                                <ul class="collapsible collapsible-accordion"
                                                    onclick="warndesprefeicoes(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Refeições
                                                            @foreach($vtotalrefeicoes as $v)
                                                                <i class="" id="showconfirm11">cloud_done</i>
                                                                <input
                                                                    class="fd-form__control col s4 m2 maskmoney"
                                                                    data-thousands="," data-prefix="R$"
                                                                    id="valor_total_aerea_brasil11"
                                                                    name="valor_total_aerea_brasil[]"
                                                                    value="R${{$v->valortotal}}" disabled>
                                                            @endforeach

                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s4 m5">
                                                                        <h6 class="fd-panel__description">Nome
                                                                            : {{Auth::user()->name}}</h6>
                                                                        <p class="fd-panel__description">  Data de preenchimento
                                                                            : {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                                                                    </div>
                                                                    <div class="col s4 m5">
                                                                        <p>C/C : {{Auth::user()->conta_contabil}}</p>
                                                                        @foreach($db10 as $v)
                                                                            <p>Conta
                                                                                Contábil: {{$v->conta_contabil}}</p>
                                                                        @endforeach

                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="col s6 m2">
                                                                    <label class="fd-form__label" for="Data">
                                                                        Data do cupom
                                                                        <span
                                                                            class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Data do cupom para reembolso
                                                                                </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="date" class="" id="data_cupom{{$i}}"
                                                                           name="data_cupom[]" required>
                                                                </div>
                                                                <div class="col s6 m4">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Descrição
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Descrição do uso dos recursos.
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text" class="fd-form__control"
                                                                               id="descricao_cupom{{$i}}"
                                                                               name="descricao_cupom[]"
                                                                               placeholder="Descrição" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Localidade
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Localidade do gasto
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                       <select name="refeicoes[]" id="refeicoes{{$i}}">
                                                                            <option selected>Selecione</option>
                                                                           <option value="Refeições">Nacional</option>
                                                                           <option value="Refeições ( Internacional )">Internacional</option>
                                                                       </select>
                                                                    <input name="capital[]" id="capital{{$i}}" value="NULL" hidden>
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Valor
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Valor do cupom descrito
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text"
                                                                               class="fd-form__control maskmoney"
                                                                               id="valor_cupom{{$i}}"
                                                                               name="valor_cupom[]"
                                                                               placeholder="R$" required
                                                                               data-thousands="" data-decimal=".">
                                                                    </div>
                                                                </div>
                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_ref blue darken-2"
                                                                            id="button_id" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_ref" class="i_wrapper_ref">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <button
                                                                        class="right fd-button--emphasized waves-light waves-effect"
                                                                        type="submit">Salvar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php $i++;?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!--Refeições-->

                            <!--Presentes-->
                            <div class="row mbg0">
                                <div class="col s12 m12">
                                    <form method="GET" action="{{url('/post_rdv_presentes')}}">
                                        <ul id="slide-out" class="col s12 m12">
                                            <li class="no-padding">
                                                <ul class="collapsible collapsible-accordion"
                                                    onclick="warndesppresentes(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Presentes
                                                            @foreach($vtotalpresentes as $v)
                                                                <i class="" id="showconfirm12">cloud_done</i>
                                                                <input
                                                                    class="fd-form__control col s4 m2 maskmoney"
                                                                    data-thousands="," data-prefix="R$"
                                                                    id="valor_total_aerea_brasil12"
                                                                    name="valor_total_aerea_brasil[]"
                                                                    value="R${{$v->valortotal}}" disabled>
                                                            @endforeach

                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s4 m5">
                                                                        <h6 class="fd-panel__description">Nome
                                                                            : {{Auth::user()->name}}</h6>
                                                                        <p class="fd-panel__description">  Data de preenchimento
                                                                            : {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                                                                    </div>
                                                                    <div class="col s4 m5">
                                                                        <p>C/C : {{Auth::user()->conta_contabil}}</p>
                                                                        @foreach($db11 as $v)
                                                                            <p>Conta
                                                                                Contábil: {{$v->conta_contabil}}</p>
                                                                        @endforeach

                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="col s6 m2">
                                                                    <label class="fd-form__label" for="Data">
                                                                        Data do cupom
                                                                        <span
                                                                            class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Data do cupom para reembolso
                                                                                </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="date" class="" id="data_cupom{{$i}}"
                                                                           name="data_cupom[]" required>
                                                                </div>
                                                                <div class="col s6 m4">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Descrição
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Descrição do uso dos recursos.
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text" class="fd-form__control"
                                                                               id="descricao_cupom{{$i}}"
                                                                               name="descricao_cupom[]"
                                                                               placeholder="Descrição" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Valor
                                                                            R$
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Valor do cupom descrito
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text"
                                                                               class="fd-form__control maskmoney"
                                                                               id="valor_cupom{{$i}}"
                                                                               name="valor_cupom[]"
                                                                               placeholder="R$" required
                                                                               data-thousands="" data-decimal=".">
                                                                    </div>
                                                                </div>
                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_pre blue darken-2"
                                                                            id="button_id" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_pre" class="i_wrapper_pre">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <button
                                                                        class="right fd-button--emphasized waves-light waves-effect"
                                                                        type="submit">Salvar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php $i++;?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!--Presentes-->

                            <!--Despesas com veículos-->
                            <div class="row mbg0">
                                <div class="col s12 m12">
                                    <form method="GET" action="{{url('/post_rdv_veiculos')}}">
                                        <ul id="slide-out" class="col s12 m12">
                                            <li class="no-padding">
                                                <ul class="collapsible collapsible-accordion"
                                                    onclick="warndesveiculos(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Despesas
                                                            com veículos
                                                            @foreach($vtotalveiculos as $v)
                                                                <i class="" id="showconfirm13">cloud_done</i>
                                                                <input
                                                                    class="fd-form__control col s4 m2 maskmoney"
                                                                    data-thousands="," data-prefix="R$"
                                                                    id="valor_total_aerea_brasil13"
                                                                    name="valor_total_aerea_brasil[]"
                                                                    value="R${{$v->valortotal}}" disabled>
                                                            @endforeach

                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s4 m5">
                                                                        <h6 class="fd-panel__description">Nome
                                                                            : {{Auth::user()->name}}</h6>
                                                                        <p class="fd-panel__description">  Data de preenchimento
                                                                            : {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                                                                    </div>
                                                                    <div class="col s4 m5">
                                                                        <p>C/C : {{Auth::user()->conta_contabil}}</p>
                                                                        @foreach($db13 as $v)
                                                                            <p>Conta
                                                                                Contábil: {{$v->conta_contabil}}</p>
                                                                        @endforeach

                                                                    </div>


                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="col s6 m2">
                                                                    <label class="fd-form__label" for="Data">
                                                                        Data do cupom
                                                                        <span
                                                                            class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Data do cupom para reembolso
                                                                                </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="date" class="" id="data_cupom{{$i}}"
                                                                           name="data_cupom[]" required>
                                                                </div>
                                                                <div class="col s6 m4">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Descrição
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Descrição do uso dos recursos.
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text" class="fd-form__control"
                                                                               id="descricao_cupom{{$i}}"
                                                                               name="descricao_cupom[]"
                                                                               placeholder="Descrição" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Valor
                                                                            R$
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Valor do cupom descrito
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text"
                                                                               class="fd-form__control maskmoney"
                                                                               id="valor_cupom{{$i}}"
                                                                               name="valor_cupom[]"
                                                                               placeholder="R$" required
                                                                               data-thousands="" data-decimal=".">
                                                                    </div>
                                                                </div>
                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_desv blue darken-2"
                                                                            id="button_id" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_desv" class="i_wrapper_desv">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <button
                                                                        class="right fd-button--emphasized waves-light waves-effect"
                                                                        type="submit">Salvar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php $i++;?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!--Despesas com veículos-->

                            <!--Outras despesas de viagens-->
                            <div class="row mbg0">
                                <div class="col s12 m12">
                                    <form method="GET" action="{{url('/post_rdv_outras_viagens')}}">
                                        <ul id="slide-out" class="col s12 m12">
                                            <li class="no-padding">
                                                <ul class="collapsible collapsible-accordion"
                                                    onclick="warndespoutrasviagens(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Outras
                                                            despesas de viagens
                                                            @foreach($vtotaloutrasviagens as $v)
                                                                <i class="" id="showconfirm14">cloud_done</i>
                                                                <input
                                                                    class="fd-form__control col s4 m2 maskmoney"
                                                                    data-thousands="," data-prefix="R$"
                                                                    id="valor_total_aerea_brasil14"
                                                                    name="valor_total_aerea_brasil[]"
                                                                    value="R${{$v->valortotal}}" disabled>
                                                            @endforeach

                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s4 m5">
                                                                        <h6 class="fd-panel__description">Nome
                                                                            : {{Auth::user()->name}}</h6>
                                                                        <p class="fd-panel__description">  Data de preenchimento
                                                                            : {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                                                                    </div>
                                                                    <div class="col s4 m5">
                                                                        <p>C/C : {{Auth::user()->conta_contabil}}</p>
                                                                        @foreach($db14 as $v)
                                                                            <p>Conta
                                                                                Contábil: {{$v->conta_contabil}}</p>
                                                                        @endforeach

                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="col s6 m2">
                                                                    <label class="fd-form__label" for="Data">
                                                                        Data do cupom
                                                                        <span
                                                                            class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Data do cupom para reembolso
                                                                                </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="date" class="" id="data_cupom{{$i}}"
                                                                           name="data_cupom[]" required>
                                                                </div>
                                                                <div class="col s6 m4">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Descrição
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Descrição do uso dos recursos.
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text" class="fd-form__control"
                                                                               id="descricao_cupom{{$i}}"
                                                                               name="descricao_cupom[]"
                                                                               placeholder="Descrição" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Valor
                                                                            R$
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Valor do cupom descrito
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text"
                                                                               class="fd-form__control maskmoney"
                                                                               id="valor_cupom{{$i}}"
                                                                               name="valor_cupom[]"
                                                                               placeholder="R$" required
                                                                               data-thousands="" data-decimal=".">
                                                                    </div>
                                                                </div>
                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_desv blue darken-2"
                                                                            id="button_id" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_desv" class="i_wrapper_desv">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <button
                                                                        class="right fd-button--emphasized waves-light waves-effect"
                                                                        type="submit">Salvar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php $i++;?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!--Outras despesas de viagens-->

                            <!--Outras-->
                            <div class="row mbg0">
                                <div class="col s12 m12">
                                    <form method="GET" action="{{url('/post_rdv_outras')}}">
                                        <ul id="slide-out" class="col s12 m12">
                                            <li class="no-padding">
                                                <ul class="collapsible collapsible-accordion"
                                                    onclick="warndespbrasil(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Outras
                                                            despesas (não viagens)
                                                            <i class="" id="showconfirm15">cloud_done</i>
                                                            @foreach($vtotaloutras as $v)

                                                                <input
                                                                    class="fd-form__control col s4 m2 maskmoney"
                                                                    data-thousands="," data-prefix="R$"
                                                                    id="valor_total_aerea_brasil15"
                                                                    name="valor_total_aerea_brasil[]"
                                                                    value="R${{$v->valortotal}}" disabled>
                                                            @endforeach

                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s4 m5">
                                                                        <h6 class="fd-panel__description">Nome
                                                                            : {{Auth::user()->name}}</h6>
                                                                        <p class="fd-panel__description">  Data de preenchimento
                                                                            : {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                                                                    </div>
                                                                    <div class="col s4 m5">
                                                                        <p>C/C : {{Auth::user()->conta_contabil}}</p>
                                                                        @foreach($db15 as $v)
                                                                            <p>Conta
                                                                                Contábil: {{$v->conta_contabil}}</p>
                                                                        @endforeach

                                                                    </div>
                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="col s6 m2">
                                                                    <label class="fd-form__label" for="Data">
                                                                        Data do cupom
                                                                        <span
                                                                            class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Data do cupom para reembolso
                                                                                </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="date" class="" id="data_cupom{{$i}}"
                                                                           name="data_cupom[]" required>
                                                                </div>
                                                                <div class="col s6 m4">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Descrição
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Descrição do uso dos recursos.
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text" class="fd-form__control"
                                                                               id="descricao_cupom{{$i}}"
                                                                               name="descricao_cupom[]"
                                                                               placeholder="Descrição" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Valor
                                                                            R$
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Valor do cupom descrito
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text"
                                                                               class="fd-form__control maskmoney"
                                                                               id="valor_cupom{{$i}}"
                                                                               name="valor_cupom[]"
                                                                               placeholder="R$" required
                                                                               data-thousands="" data-decimal=".">
                                                                    </div>
                                                                </div>
                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_odes blue darken-2"
                                                                            id="button_id" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_odes" class="i_wrapper_odes">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <button
                                                                        class="right fd-button--emphasized waves-light waves-effect"
                                                                        type="submit">Salvar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php $i++;?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!--Outras-->

                            <!--Km carro próprio-->
                            <div class="row mbg0">
                                <div class="col s12 m12">
                                    <form method="GET" action="{{url('/rdv_postkmproprio')}}">
                                        <ul id="slide-out" class="col s12 m12">
                                            <li class="no-padding">
                                                <ul class="collapsible collapsible-accordion"
                                                    onclick="warndespbrasil(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Quilometragem carro próprio
                                                            R$ 0,80
                                                            <i class="" id="showconfirm16">cloud_done</i>
                                                            @foreach($vtotalkm as $v)

                                                                <input
                                                                    class="fd-form__control col s4 m2 maskmoney"
                                                                    data-thousands="," data-prefix="R$"
                                                                    id="valor_total_km"
                                                                    name="valor_total_km[]"
                                                                    value="R${{$v->valortotal}}" disabled>
                                                            @endforeach

                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s4 m5">
                                                                        <h6 class="fd-panel__description">Nome
                                                                            : {{Auth::user()->name}}</h6>
                                                                        <p class="fd-panel__description">  Data de preenchimento
                                                                            : {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                                                                    </div>
                                                                    <div class="col s4 m5">
                                                                        <p>C/C : {{Auth::user()->conta_contabil}}</p>
                                                                        @foreach($db16 as $v)
                                                                            <p>Conta
                                                                                Contábil: {{$v->conta_contabil}}</p>
                                                                        @endforeach

                                                                    </div>
                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="col s6 m2">
                                                                    <label class="fd-form__label" for="Data">
                                                                        Data do cupom
                                                                        <span
                                                                            class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Data do cupom para reembolso
                                                                                </span>
                                                                        </span>
                                                                    </label>
                                                                    <input type="date" class="" id="data_cupom{{$i}}"
                                                                           name="data_cupom[]" required>
                                                                </div>
                                                                <div class="col s6 m4">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Descrição
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Descrição do uso dos recursos.
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="text" class="fd-form__control"
                                                                               id="descricao_cupom{{$i}}"
                                                                               name="descricao_cupom[]"
                                                                               placeholder="Descrição" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">
                                                                            Quilometragem
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Valor do cupom descrito
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <input type="number"
                                                                               class="fd-form__control"
                                                                               id="quilometragem{{$i}}"
                                                                               name="quilometragem[]">
                                                                    </div>
                                                                </div>
                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_kmprop blue darken-2"
                                                                            id="button_id" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_kmprop" class="i_wrapper_kmprop">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <button
                                                                        class="right fd-button--emphasized waves-light waves-effect"
                                                                        type="submit">Salvar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php $i++;?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!--Km carro próprio-->


                        </div>
                        <div class="fd-panel__footer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
