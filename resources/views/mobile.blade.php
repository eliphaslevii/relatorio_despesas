@extends('layouts.app')

@section('content')
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
                                                <ul class="collapsible collapsible-accordion" >
                                                    <li class="">
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Despesas
                                                            aéreas - Brasil
                                                            <i class="" id="showconfirm">cloud_done</i>
                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s12 m12">
                                                                        @foreach($vt as $v)
                                                                        <label for="semana_mes" class="fd-form__label">Valor semanal
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Valor acumulado por semana!
                                                                                </span>
                                                                            </span>
                                                                        </label>
                                                                        <input
                                                                            class="maskmoney"
                                                                            data-thousands="," data-prefix="R$"
                                                                            id="valor_total_aerea_brasil"
                                                                            name="valor_total_aerea_brasil[]"
                                                                            value="R${{$v->valortotal}}" disabled>
                                                                    @endforeach
                                                                    </div>
                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col s12 m2">
                                                                        <label class="fd-form__label" for="Data">
                                                                            Data
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m4">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m2">
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
                                                                </div>
                                                                <input id="qrcodeval" name="qrcodeval[]" class="class" value="" hidden>
                                                                 <!--modal-->
                                                                 <div id="modal1" class="modal col s8 m4">
                                                                    <div class="modal-content center">
                                                                    <video id="preview" style="width: 100%;height:100%;"></video>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="#!" id="btnc" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                                                                    </div>
                                                                    </div>
                                                                <!--modal-->
                                                                <div class="row">
                                                                    <div class="col s6 m2">
                                                                        <div class="fd-form__item">
                                                                            <br>
                                                                            <button
                                                                                data-target="modal1" class="modal-trigger btn-floating blue darken-2"
                                                                                id="qrcode" type="button" href="#modal1"><i
                                                                                    class="material-icons" onclick="qrcodescan()" >qr_code</i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col s6 m2">
                                                                        <div class="fd-form__item">
                                                                            <br>
                                                                            <button
                                                                                class="btn-floating add_field_button_mobile1 add_field_button_mobile1 blue darken-2"
                                                                                id="button_id_mobile1" type="reset"><i
                                                                                    class="material-icons">add</i>
                                                                                OK
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_mobile1" class="i_wrapper_mobile1">
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
                                                <ul class="collapsible collapsible-accordion">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Despesas
                                                            aéreas - Exterior
                                                            <i class="" id="showconfirm2">cloud_done</i>

                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">

                                                                    <div class="col s12 m12">
                                                                        <label for="semana_mes" class="fd-form__label">Valor semanal
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content ">
                                                                                        Valor acumulado!
                                                                                </span>
                                                                            </span>
                                                                        </label>
                                                                        @foreach($vtotal as $v)
                                                                        <input
                                                                            class="maskmoney"
                                                                            data-thousands="," data-prefix="R$"
                                                                            id="valor_total_aerea_brasil2"
                                                                            name="valor_total_aerea_brasil[]"
                                                                            value="R${{$v->valortotal}}" disabled>
                                                                    @endforeach
                                                                    </div>
                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col s12 m2">
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
                                                                        <input type="date" class="" id="data_cupom{{$i}}"
                                                                               name="data_cupom[]" required>
                                                                    </div>
                                                                </div>
                                                               <div class="row">
                                                                    <div class="col s12 m4">
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
                                                               </div>
                                                                <div class="row">
                                                                    <div class="col s12 m2">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m2">
                                                                        <div class="fd-form__item">
                                                                            <br>
                                                                            <button
                                                                                class="btn-floating add_field_button_ext_mobile blue darken-2"
                                                                                id="button_id" type="reset"><i
                                                                                    class="material-icons">add</i>
                                                                                OK
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_ext_mobile" class="i_wrapper_ext_mobile">
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
                                                <ul class="collapsible collapsible-accordion" onclick="warndesptaxi(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Táxi,
                                                            onibus, balsa /carro alugado
                                                            <i class="" id="showconfirm3">cloud_done</i>
                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="row">

                                                                        <div class="col s12 m12">
                                                                            <label class="fd-form__label" for="Data">
                                                                                Valor semanal
                                                                                <span
                                                                                    class="fd-inline-help fd-has-float-right">
                                                                                        <span
                                                                                            class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                                Valor acumulado!
                                                                                        </span>
                                                                                </span>
                                                                            </label>
                                                                            @foreach($vtotaltaxi as $v)
                                                                            <input
                                                                                class=" maskmoney"
                                                                                data-thousands="," data-prefix="R$"
                                                                                id="valor_total_aerea_brasil3"
                                                                                name="valor_total_aerea_brasil[]"
                                                                                value="R${{$v->valortotal}}" disabled>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col s12 m2">
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
                                                                        <input type="date" class="" id="data_cupom{{$i}}"
                                                                               name="data_cupom[]" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m4">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m2">
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
                                                                </div>

                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_tax_mobile blue darken-2"
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
                                                            <div id="i_wrapper_tax_mobile" class="i_wrapper_tax_mobile">
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
                                                <ul class="collapsible collapsible-accordion">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Estacionamento
                                                            / Pedágio
                                                            <i class="" id="showconfirm4">cloud_done</i>

                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="row">
                                                                        <div class="col s12 m12">
                                                                            <label for="semana_mes" class="fd-form__label">Valor semanal
                                                                                <span
                                                                                    class="fd-inline-help fd-has-float-right">
                                                                                    <span
                                                                                        class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                           Valor acumulado!
                                                                                    </span>
                                                                                </span>
                                                                            </label>
                                                                            @foreach($vtotalestacionamento as $v)
                                                                            <input
                                                                                class="maskmoney"
                                                                                data-thousands="," data-prefix="R$"
                                                                                id="valor_total_aerea_brasil4"
                                                                                name="valor_total_aerea_brasil[]"
                                                                                value="R${{$v->valortotal}}" disabled>
                                                                        @endforeach
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col s12 m2">
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
                                                                        <input type="date" class="" id="data_cupom{{$i}}"
                                                                               name="data_cupom[]" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m4">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m2">
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
                                                                </div>

                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_est_mobile blue darken-2"
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
                                                            <div id="i_wrapper_est_mobile" class="i_wrapper_est_mobile">
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
                                                <ul class="collapsible collapsible-accordion" onclick="warndespcombustivel(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Combustivel
                                                            <i class="" id="showconfirm5">cloud_done</i>
                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s12 m12">
                                                                        <label for="semana_mes" class="fd-form__label">Valor Semanal
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Valor acumulado!
                                                                                </span>
                                                                            </span>
                                                                        </label>
                                                                        @foreach($vtotalcombustivel as $v)
                                                                        <input
                                                                            class="maskmoney"
                                                                            data-thousands="," data-prefix="R$"
                                                                            id="valor_total_aerea_brasil5"
                                                                            name="valor_total_aerea_brasil[]"
                                                                            value="R${{$v->valortotal}}" disabled>
                                                                    @endforeach
                                                                    </div>
                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                        <input type="date" class="" id="data_cupom{{$i}}"
                                                                               name="data_cupom[]" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s6 m2">
                                                                        <div class="fd-form__item">
                                                                            <br>
                                                                            <button
                                                                                class="btn-floating add_field_button_com_mobile blue darken-2"
                                                                                id="button_id" type="reset"><i
                                                                                    class="material-icons">add</i>
                                                                                OK
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_com_mobile" class="i_wrapper_com_mobile">
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
                                                <ul class="collapsible collapsible-accordion" onclick="warndespcorreio(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Correio
                                                            <i class="" id="showconfirm6">cloud_done</i>
                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col s12 m12">
                                                                        <label for="semana_mes" class="fd-form__label">Valor semanal
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                    Valor acumulado
                                                                                </span>
                                                                            </span>
                                                                        </label>
                                                                        @foreach($vtotalcorreio as $v)
                                                                        <input
                                                                            class="maskmoney"
                                                                            data-thousands="," data-prefix="R$"
                                                                            id="valor_total_aerea_brasil6"
                                                                            name="valor_total_aerea_brasil[]"
                                                                            value="R${{$v->valortotal}}" disabled>
                                                                    @endforeach
                                                                    </div>
                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                        <input type="date" class="" id="data_cupom{{$i}}"
                                                                               name="data_cupom[]" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m4">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                </div>

                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_cor_mobile blue darken-2"
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
                                                            <div id="i_wrapper_cor_mobile" class="i_wrapper_cor_mobile">
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
                                                <ul class="collapsible collapsible-accordion" onclick="warndesptelefone(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Telefone,
                                                            Fax, Internet
                                                            <i class="" id="showconfirm7">cloud_done</i>
                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="row">
                                                                        <div class="col s12 m12">
                                                                            <label for="semana_mes" class="fd-form__label">Valor semanal
                                                                                <span
                                                                                    class="fd-inline-help fd-has-float-right">
                                                                                    <span
                                                                                        class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                            Semana acumulada!
                                                                                    </span>
                                                                                </span>
                                                                            </label>
                                                                            @foreach($vtotaltelefone as $v)
                                                                            <input
                                                                                class="maskmoney"
                                                                                data-thousands="," data-prefix="R$"
                                                                                id="valor_total_aerea_brasil7"
                                                                                name="valor_total_aerea_brasil[]"
                                                                                value="R${{$v->valortotal}}" disabled>
                                                                        @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                        <input type="date" class="" id="data_cupom{{$i}}"
                                                                               name="data_cupom[]" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s6 m6">
                                                                        <div class="fd-form__item">
                                                                            <br>
                                                                            <button
                                                                                class="btn-floating add_field_button_tel_mobile blue darken-2"
                                                                                id="button_id" type="reset"><i
                                                                                    class="material-icons">add</i>
                                                                                OK
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_tel_mobile" class="i_wrapper_tel_mobile">
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
                                                <ul class="collapsible collapsible-accordion" onclick="warndesphospbrasil(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Hospedagem
                                                            -Brasil c/ café da manhã
                                                            <i class="" id="showconfirm8">cloud_done</i>
                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="row">

                                                                        <div class="col s12 m12">
                                                                            <label for="semana_mes" class="fd-form__label">Valor semanal
                                                                                <span
                                                                                    class="fd-inline-help fd-has-float-right">
                                                                                    <span
                                                                                        class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                            Semana acumulada!
                                                                                    </span>
                                                                                </span>
                                                                            </label>
                                                                                @foreach($vtotalhotelbrasil as $v)
                                                                                <input
                                                                                    class="maskmoney"
                                                                                    data-thousands="," data-prefix="R$"
                                                                                    id="valor_total_aerea_brasil8"
                                                                                    name="valor_total_aerea_brasil[]"
                                                                                    value="R${{$v->valortotal}}" disabled>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                        <input type="date" class="" id="data_cupom{{$i}}"
                                                                               name="data_cupom[]" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                                   data-thousands="" maxlength="230.00" data-decimal=".">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s6 m6">
                                                                        <div class="fd-form__item">
                                                                            <br>
                                                                            <button
                                                                                class="btn-floating add_field_button_hosb_mobile blue darken-2"
                                                                                id="button_id" type="reset"><i
                                                                                    class="material-icons">add</i>
                                                                                OK
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_hosb_mobile" class="i_wrapper_hosb_mobile">
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
                                                <ul class="collapsible collapsible-accordion"onclick="warndesphospext(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Hospedagem
                                                            -Exterior c/ café da manhã
                                                            <i class="" id="showconfirm9">cloud_done</i>
                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="row">
                                                                        <div class="col s12 m12">
                                                                            <label for="semana_mes99" class="fd-form__label">Valor semanal
                                                                                <span
                                                                                    class="fd-inline-help fd-has-float-right">
                                                                                    <span
                                                                                        class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                            Semana acumulada!
                                                                                    </span>
                                                                                </span>
                                                                            </label>
                                                                            @foreach($vtotalhotelexterior as $v)
                                                                            <input
                                                                                class="maskmoney"
                                                                                data-thousands="," data-prefix="R$"
                                                                                id="valor_total_aerea_brasil9"
                                                                                name="valor_total_aerea_brasil[]"
                                                                                value="R${{$v->valortotal}}" disabled>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                        <input type="date" class="" id="data_cupom{{$i}}"
                                                                               name="data_cupom[]" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m12">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s6 m6">
                                                                        <div class="fd-form__item">
                                                                            <br>
                                                                            <button
                                                                                class="btn-floating add_field_button_hose_mobile blue darken-2"
                                                                                id="button_id" type="reset"><i
                                                                                    class="material-icons">add</i>
                                                                                OK
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_hose_mobile" class="i_wrapper_hose_mobile">
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
                                                <ul class="collapsible collapsible-accordion">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Convite
                                                            <i class="" id="showconfirm10">cloud_done</i>
                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="row">
                                                                        <div class="col s12 m12">
                                                                            <label for="semana_mes99" class="fd-form__label">Valor semanal
                                                                                <span
                                                                                    class="fd-inline-help fd-has-float-right">
                                                                                    <span
                                                                                        class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                            Semana acumulada!
                                                                                    </span>
                                                                                </span>
                                                                            </label>
                                                                            @foreach($vtotalconvite as $v)
                                                                            <input
                                                                                class=" maskmoney"
                                                                                data-thousands="," data-prefix="R$"
                                                                                id="valor_total_aerea_brasil10"
                                                                                name="valor_total_aerea_brasil[]"
                                                                                value="R${{$v->valortotal}}" disabled>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                        <div class="row">
                                                            <div class="row">
                                                                <div class="col s12 m6">
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
                                                                    <input type="date" class="" id="data_cupom{{$i}}"
                                                                           name="data_cupom[]" required>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m6">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Número de convidados
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Número de convidados.
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                        <select name="convidados[]" id="convidados{{$i}}">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m6">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Cidade
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
                                                                            <option value="Não capital">Não capital</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m6">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Refeição
                                                                            <span
                                                                                class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                        Descrição do uso dos recursos.
                                                                                </span>
                                                                        </span>
                                                                        </label>
                                                                    <select id="refeicao{{$i}}" name="refeicao[]">
                                                                            <option value="Almoço">Almoço</option>
                                                                            <option value="Jantar">Jantar</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m6">
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
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m6">
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
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s4 m2">
                                                                <div class="fd-form__item">
                                                                    <br>
                                                                    <button
                                                                        class="btn-floating add_field_button_con_mobile blue darken-2"
                                                                        id="button_id" type="reset"><i
                                                                            class="material-icons">add</i>
                                                                        OK
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <br>
                                                        </div>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_con_mobile" class="i_wrapper_con_mobile">
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
                                                <ul class="collapsible collapsible-accordion" onclick="warndesprefeicoes(); this.onclick=null;">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Refeições
                                                            <i class="" id="showconfirm11">cloud_done</i>
                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="row">
                                                                        <div class="col s12 m12">
                                                                            <label for="semana_mes" class="fd-form__label">Valor semanal
                                                                                <span
                                                                                    class="fd-inline-help fd-has-float-right">
                                                                                    <span
                                                                                        class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                            Semana acumulada!
                                                                                    </span>
                                                                                </span>
                                                                            </label>
                                                                            @foreach($vtotalrefeicoes as $v)
                                                                            <input
                                                                                class="maskmoney"
                                                                                data-thousands="," data-prefix="R$"
                                                                                id="valor_total_aerea_brasil11"
                                                                                name="valor_total_aerea_brasil[]"
                                                                                value="R${{$v->valortotal}}" disabled>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                        <input type="date" class="" id="data_cupom{{$i}}"
                                                                               name="data_cupom[]" required>
                                                                    </div>
                                                                </div>
                                                               <div class="row">
                                                                <div class="col s12 m6">
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
                                                               </div>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
                                                                        <div class="fd-form__item">
                                                                            <label class="fd-form__label" for="OatmD552">Localidade

                                                                                <span
                                                                                    class="fd-inline-help fd-has-float-right">
                                                                                <span
                                                                                    class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                    Localidade do cupom descrito
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
                                                                </div>
                                                               <div class="row">
                                                                <div class="col s12 m6">
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
                                                               </div>
                                                               <div class="row">
                                                                <div class="col s6 m6">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_ref_mobile blue darken-2"
                                                                            id="button_id" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                               </div>

                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_ref_mobile" class="i_wrapper_ref_mobile">
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
                                                <ul class="collapsible collapsible-accordion">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Presentes
                                                            <i class="" id="showconfirm12">cloud_done</i>
                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="row">

                                                                        <div class="col s6 m6">
                                                                            <label for="semana_mes" class="fd-form__label">Valor semanal
                                                                                <span
                                                                                    class="fd-inline-help fd-has-float-right">
                                                                                    <span
                                                                                        class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                           Semana acumulada!
                                                                                    </span>
                                                                                </span>
                                                                            </label>
                                                                            @foreach($vtotalpresentes as $v)
                                                                            <input
                                                                                class="maskmoney"
                                                                                data-thousands="," data-prefix="R$"
                                                                                id="valor_total_aerea_brasil12"
                                                                                name="valor_total_aerea_brasil[]"
                                                                                value="R${{$v->valortotal}}" disabled>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                        <input type="date" class="" id="data_cupom{{$i}}"
                                                                               name="data_cupom[]" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m12">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s6 m6">
                                                                        <div class="fd-form__item">
                                                                            <br>
                                                                            <button
                                                                                class="btn-floating add_field_button_pre_mobile blue darken-2"
                                                                                id="button_id" type="reset"><i
                                                                                    class="material-icons">add</i>
                                                                                OK
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_pre_mobile" class="i_wrapper_pre_mobile">
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
                                                <ul class="collapsible collapsible-accordion" >
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Despesas
                                                            com veículos
                                                            <i class="" id="showconfirm13">cloud_done</i>
                                                        </p>

                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="row">
                                                                        <div class="col s6 m6">
                                                                            <label for="semana_mes" class="fd-form__label">Valor semanal
                                                                                <span
                                                                                    class="fd-inline-help fd-has-float-right">
                                                                                    <span
                                                                                        class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                            Semana acumulada!
                                                                                    </span>
                                                                                </span>
                                                                            </label>
                                                                            @foreach($vtotalveiculos as $v)
                                                                            <input
                                                                                class="maskmoney"
                                                                                data-thousands="," data-prefix="R$"
                                                                                id="valor_total_aerea_brasil13"
                                                                                name="valor_total_aerea_brasil[]"
                                                                                value="R${{$v->valortotal}}" disabled>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                        <input type="date" class="" id="data_cupom{{$i}}"
                                                                               name="data_cupom[]" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                </div>
                                                               <div class="row">
                                                                <div class="col s12 m6">
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
                                                               </div>
                                                               <div class="row">
                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_desv_mobile blue darken-2"
                                                                            id="button_id" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                               </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_desv_mobile" class="i_wrapper_desv_mobile">
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
                                                <ul class="collapsible collapsible-accordion">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Outras
                                                            despesas de viagens
                                                            <i class="" id="showconfirm14">cloud_done</i>
                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="row">
                                                                        <div class="col s6 m6">
                                                                            <label for="semana_mes" class="fd-form__label">Valor semanal
                                                                                <span
                                                                                    class="fd-inline-help fd-has-float-right">
                                                                                    <span
                                                                                        class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                            Semana acumulada!
                                                                                    </span>
                                                                                </span>
                                                                            </label>
                                                                            @foreach($vtotaloutrasviagens as $v)
                                                                                <input
                                                                                    class="maskmoney"
                                                                                    data-thousands="," data-prefix="R$"
                                                                                    id="valor_total_aerea_brasil14"
                                                                                    name="valor_total_aerea_brasil[]"
                                                                                    value="R${{$v->valortotal}}" disabled>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                        <input type="date" class="" id="data_cupom{{$i}}"
                                                                               name="data_cupom[]" required>
                                                                    </div>
                                                                </div>
                                                               <div class="row">
                                                                <div class="col s12 m6">
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
                                                               </div>
                                                               <div class="row">
                                                                <div class="col s12 m6">
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
                                                               </div>
                                                                <div class="row">
                                                                    <div class="col s4 m2">
                                                                        <div class="fd-form__item">
                                                                            <br>
                                                                            <button
                                                                                class="btn-floating add_field_button_desv_mobile blue darken-2"
                                                                                id="button_id" type="reset"><i
                                                                                    class="material-icons">add</i>
                                                                                OK
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_desv_mobile" class="i_wrapper_desv_mobile">
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
                                                <ul class="collapsible collapsible-accordion">
                                                    <li>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>Outras
                                                            despesas (não viagens)
                                                            <i class="" id="showconfirm15">cloud_done</i>
                                                        </p>
                                                        <?php $i = 0;?>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="row">
                                                                        <div class="col s6 m6">
                                                                            <label for="semana_mes" class="fd-form__label">Valor semanal
                                                                                <span
                                                                                    class="fd-inline-help fd-has-float-right">
                                                                                    <span
                                                                                        class="fd-inline-help__content fd-inline-help__content--bottom-left">
                                                                                            Semana acumulada!
                                                                                    </span>
                                                                                </span>
                                                                            </label>
                                                                            @foreach($vtotaloutras as $v)
                                                                                <input
                                                                                class="fd-form__control col s4 m2 maskmoney"
                                                                                data-thousands="," data-prefix="R$"
                                                                                id="valor_total_aerea_brasil15"
                                                                                name="valor_total_aerea_brasil[]"
                                                                                value="R${{$v->valortotal}}" disabled>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="divider">
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                        <input type="date" class="" id="data_cupom{{$i}}"
                                                                               name="data_cupom[]" required>
                                                                    </div>
                                                                </div>
                                                               <div class="row">
                                                                <div class="col s12 m6">
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
                                                               </div>
                                                                <div class="row">
                                                                    <div class="col s12 m6">
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
                                                                </div>
                                                               <div class="row">
                                                                <div class="col s6 m6">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn-floating add_field_button_odes_mobile blue darken-2"
                                                                            id="button_id" type="reset"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                               </div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="i_wrapper_odes_mobile" class="i_wrapper_odes_mobile">
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
                            <div class="row mbg0"><!--Km carro próprio-->
                                <div class="col s12 m12">
                                    <form method="GET" action="{{url('/post_rdv')}}" id="whereEntry">
                                        <ul id="slide-out" class="col s12 m12">
                                            <li class="no-padding">
                                                <ul class="collapsible collapsible-accordion">
                                                    <li>

                                                        <?php $i = 0;?>
                                                        <p class="collapsible-header"><i class="material-icons">add</i>
                                                            Carro proprio x km-Satz R$ 0,75

                                                            <input
                                                                class="fd-form__control classeresultado col s4 m4"
                                                                id="valor_km_proprio" name="valor_km_proprio[]"
                                                                placeholder="R$">
                                                        </p>
                                                        <div class="collapsible-body ">
                                                            <div class="row">
                                                                <p class="fd-panel__description">
                                                                    Carro proprio x km-Satz R$ 0,75
                                                                </p>
                                                                <br>
                                                                <div class="hide">
                                                                    <input name="nome_funcionario" id="nome_funcionario"
                                                                           value="{{ Auth::user()->name }}">
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <label class="fd-form__label" for="Data">
                                                                        Data
                                                                    </label>
                                                                    <input type="date" class=""
                                                                           id="data_km_proprio{{$i}}"
                                                                           name="data_km_proprio[]">
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Quilometragem</label>
                                                                        <input type="text"
                                                                               class="fd-form__control classekm"
                                                                               id="quilometragem_km_proprio{{$i}}"
                                                                               name="quilometragem_km_proprio[]"
                                                                               placeholder="KM">
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m4">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Descrição</label>
                                                                        <input type="text" class="fd-form__control"
                                                                               id="descricao_km_proprio{{$i}}"
                                                                               name="descricao_cupom[]"
                                                                               placeholder="Descrição">
                                                                    </div>
                                                                </div>
                                                                <div class="col s6 m2">
                                                                    <div class="fd-form__item">
                                                                        <label class="fd-form__label" for="OatmD552">Descrição</label>
                                                                        <input type="text" class="fd-form__control"
                                                                               id="valor_km{{$i}}"
                                                                               name="valor_km[]"
                                                                               placeholder="Descrição">
                                                                    </div>
                                                                </div>
                                                                <div class="col s4 m2">
                                                                    <div class="fd-form__item">
                                                                        <br>
                                                                        <button
                                                                            class="btn btn-floating add_field_button blue darken-2"
                                                                            id="AddMoreIncomeBox"><i
                                                                                class="material-icons">add</i>
                                                                            OK
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <div class="divider">
                                                            </div>
                                                            <br>
                                                            <div id="km_proprio_wrapper" class="km_proprio_wrapper">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m12">
                                                                    <button class="right btn btn-floating"
                                                                            id="km_proprio_wrapper"><i
                                                                            class="material-icons">add</i>
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
