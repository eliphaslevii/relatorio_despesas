@extends('layouts.app')

@section('content')
@if (\Session::has('Success'))
<div class="col s12 m12 right">
    <script> $(document).ready(function () {
            M.toast({html: 'Agradecemos sua contribuição para melhorias.', classes: 'rounded blue darken-2'});
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
                                Central de relacionamento - Relato de bugs & erros.
                            </h3>
                            <p class="fd-panel__description">
                                Não deixe de contribuir com a melhoria de nossos serviços,
                                relate aqui bugs e erros que você encontrou no caminho.
                            </p>
                        </div>
                        <div class="fd-panel__actions">
                        </div>
                    </div>
                    <div class="fd-panel__body content" >
                        <form method="GET" action="{{url('/bugreport')}}">
                            @csrf
                            <div class="row">
                                <div class="col s3 m3"></div>
                                <div class="col s6 m6">
                                    <div class="fd-form__set center">
                                        <div class="fd-form__item center">
                                            <label class="fd-form__label" for="textarea-1">Relate o problema</label>
                                            <textarea required id="texto" name="texto" class="fd-form__control textarea-fd" id="textarea-1"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s3 m3"></div>
                            </div>
                            <div class="row">
                                <div class="col s5 m5"></div>
                                <div class="col s4 m4 right">
                                    <button class="waves-effect waves-light btn blue darken-1">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
