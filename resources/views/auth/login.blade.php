@extends('layouts.login')

@section('content')
    <div class="container" id="rowclass">
        <div class="valign-wrapper row login-box margintop" style="margin-top:18%;">
            <div class="col card  hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 m12">
                                    <div class="row">
                                        <div class="col s6 m6">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <img class="card-title right" src="{{asset('img/logo.png')}}" style=" width: 70%">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row fd-input-group">
                                        <div class="col s12 m12">
                                            <input placeholder="Email" id="email" type="email"
                                                   class="validate @error('email') is-invalid @enderror" name="email"
                                                   value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row fd-input-group">
                                        <div class="col s12 m12">
                                            <input id="password" placeholder="Senha" type="password"
                                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                                   required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-action right-align">

                            <button type="submit" class="btn blue darken-5 white-text waves-effect waves-light"
                                    value="Login" id="">
                                LOGIN
                            </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>

<style>
</style>

@endsection
