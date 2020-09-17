@extends('layouts.app')

@section('content')
    <script> $(document).ready(function () {
            M.toast({html: 'Cuidado! Você está prestes a alterar os dados dos seus registros', classes: 'black-text rounded yellow darken-2'});
        })
    </script>
    <div class="container-fluid">
        <div class="row">
            <div class="col s12 m12">
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
                            });
                        </script>
                    </div>
                @endif
                <div class="fd-panel mgtop">
                    <div class="fd-panel__header">
                        <div class="fd-panel__head">
                            <h3 class="fd-panel__title">
                                Relatório de despesas
                            </h3>
                            <p class="fd-panel__description">
                               Edição de linhas
                            </p>
                        </div>
                        <div class="fd-panel__actions">
                            {{\Carbon\Carbon::now()->format('d-m-Y')}}
                        </div>
                    </div>
                    <form method="GET" action="{{url('/post_edit')}}">
                    <div class="fd-panel__body">
                        <div class="row">
                            <div class="col s8 m8"></div>
                            <div class="col s4 m4">
                                <select id="semana_retrieve" name="semana_retrieve">
                                    <option>Selecione a semana a ser editada</option>
                                    @foreach($retrievesemana as $s)
                                <option>{{$s->semana_mes}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <table class="fd-table">
                            <thead>
                            <tr>
                                <th>Data</th>
                                <th>Descrição</th>
                                <th>Valor</th>
                                <th>Categoria</th>
                                <th>Apagar</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $i =0;?>
                            @foreach($db_retrieve as $v)
                            <td>
                                <input hidden id="id{{$i}}" value="{{$v->id}}" name="id[]">
                                <input hidden id="semana_mes{{$i}}" value="{{$v->semana_mes}}" name="semana_mes[]">
                                <div class="fd-form__set">
                                    <div class="fd-form__item">
                                        <label class="fd-form__label" for="data_cupom">Data do cupom</label>
                                        <input value="{{$v->data_cupom}}" class="fd-form__control" type="date" id="data_cupom{{$i}}" name="data_cupom[]">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="fd-form__set">
                                    <div class="fd-form__item">
                                        <label class="fd-form__label" for="descricao_cupom">Descrição</label>
                                        <input value="{{$v->descricao_cupom}}" class="fd-form__control" type="text" id="descricao_cupom{{$i}}" name="descricao_cupom[]">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="fd-form__set">
                                    <div class="fd-form__item">
                                        <label class="fd-form__label" for="valor_cupom">Valor</label>
                                        <input data-thousands=""   value="{{$v->valor_cupom}}" class="fd-form__control maskmoney" type="text" id="valor_cupom{{$i}}" name="valor_cupom[]">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="fd-form__set">
                                    <div class="fd-form__item">
                                        <label class="fd-form__label" for="valor_cupom">categoria</label>
                                        <input disabled value="{{$v->categoria}}" class="fd-form__control maskmoney" type="text" id="valor_cupom{{$i}}" name="valor_cupom[]">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <legend class="fd-form__legend">Apagar linha</legend>
                            <div class="fd-form__item fd-form__item--check ">
                                <label class="fd-form__label" for="status">
                                    <input type="checkbox" class="fd-form__control classetxt" id="statuss{{$i}}" name=statuss[]>
                                    <input hidden id="status{{$i}}" name="status[]">
                                </label>
                            </div>
                            </td>
                            <script>
                                $('#statuss'+{{$i}}+'').on('change', function(){
                                    this.value = this.checked ? 1 : 0;
                                    if(this.value === '1')
                                    {
                                        $('#status'+{{$i}}+'').val('0');
                                    }
                                    else
                                    {
                                        $('#status'+{{$i}}+'').val('1');
                                    }
                                    console.log(this.value);
                                    }).change();
                            </script>
                            <?php $i++;?>
                            </tbody>
                            @endforeach
                        </table>

                        <div class="row">
                            <div class="col s12 m12">
                                <button
                                    class="right fd-button--emphasized waves-light waves-effect"
                                    type="submit">Salvar
                                </button>
                            </div>
                        </div>

                    </div>
                    </form>
                    <script>
                        $(document).ready(function () {
                            $('#semana_retrieve').change(function () {
                                window.location = 'http://127.0.0.1:8000/edit/' + $(this).val();
                            })

                        });
                    </script>
                </div>
            </div>
        </div>



@endsection
