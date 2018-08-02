
@extends('layouts.app')

@section('content')

   <center> <h2><b>{{ __('Alta de administradores') }}</b></h2></center>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('  Formulario') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/administradores/altas') }}">
                        @csrf
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del estacionamiento') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="ap" class="col-md-4 col-form-label text-md-right">{{ __('Tarjeta') }}</label>

                            <div class="col-md-6">
                                <input id="ap" type="text" class="form-control{{ $errors->has('ap') ? ' is-invalid' : '' }}" name="ap" value="{{ old('ap') }}" required autofocus>

                                @if ($errors->has('ap'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ap') }}</strong>
                                    </span>
                                @endif
                            </div>





                        </div>


                        <div class="form-group row">
                            <label for="am" class="col-md-4 col-form-label text-md-right">{{ a__('Cuenta') }}</label>

                            <div class="col-md-6">

                                {!! Mapper::render()!!}


                                @if ($errors->has('am'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('am') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>



                        <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" required autofocus>

                                @if ($errors->has('telefono'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>






                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirma Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

 <!--<![endif] Leo-->
















                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
