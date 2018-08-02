@extends('layouts.app')
@section('content')

<form method="POST" action="{{ url('/servicio') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('  Registro de administrador ') }}</div>

                <div class="card-body">
                       @csrf
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
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
                            <label for="ap" class="col-md-4 col-form-label text-md-right">{{ __('Apellido paterno') }}</label>

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
                            <label for="am" class="col-md-4 col-form-label text-md-right">{{ __('Apellido materno') }}</label>

                            <div class="col-md-6">
                                <input id="am" type="text" class="form-control{{ $errors->has('am') ? ' is-invalid' : '' }}" name="am" value="{{ old('am') }}" required autofocus>

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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

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
                </div>
            </div>
        </div>
    </div>
</div>
<!--card -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('  Tarjeta ') }}</div>


                <div class="card-body">
                       @csrf
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Numero de tarjeta') }}</label>

                            <div class="col-md-6">
                                <input id="notarjeta" type="text" class="form-control{{ $errors->has('notarjeta') ? ' is-invalid' : '' }}" name="notarjeta" value="{{ old('notarjeta') }}" required autofocus>

                                @if ($errors->has('notarjeta'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('notarjeta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="mm" class="col-md-4 col-form-label text-md-right">{{ __('MM') }}</label>

                            <div class="col-md-6">
                                <input id="mm" type="text" class="form-control{{ $errors->has('mm') ? ' is-invalid' : '' }}" name="mm" value="{{ old('mm') }}" required autofocus>

                                @if ($errors->has('mm'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mm') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="aa" class="col-md-4 col-form-label text-md-right">{{ __('AA') }}</label>
                            <div class="col-md-6">
                                <input id="aa" type="text" class="form-control{{ $errors->has('aa') ? ' is-invalid' : '' }}" name="aa" value="{{ old('aa') }}" required autofocus>
                                @if ($errors->has('aa'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('aa') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('CVV') }}</label>

                            <div class="col-md-6">
                                <input id="cvv" type="text" class="form-control{{ $errors->has('cvv') ? ' is-invalid' : '' }}" name="cvv" value="{{ old('cvv') }}" required autofocus>
                                @if ($errors->has('cvv'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('cvv') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                           <div class="form-group row">
                            <label for="cp" class="col-md-4 col-form-label text-md-right">{{ __('Codigo postal') }}</label>
                            <div class="col-md-6">
                                <input id="cp" type="text" class="form-control{{ $errors->has('cp') ? ' is-invalid' : '' }}" name="cp" value="{{ old('cp') }}" required autofocus>
                                @if ($errors->has('cp'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('cp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('  Estacionamiento') }}</div>
                <div class="card-body">
                        @csrf
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del estacionamiento') }}</label>

                            <div class="col-md-6">
                                <input id="nombree" type="text" class="form-control{{ $errors->has('nombree') ? ' is-invalid' : '' }}" name="nombree" value="{{ old('nombree') }}" required autofocus>

                                @if ($errors->has('nombree'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nombree') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group row">
                            <label for="cuenta" class="col-md-4 col-form-label text-md-right">{{ __('Cuenta') }}</label>

                            <div class="col-md-6">
                                <input id="cuenta" type="text" class="form-control{{ $errors->has('cuenta') ? ' is-invalid' : '' }}" name="cuenta" value="{{ old('cuenta') }}" required autofocus>

                                @if ($errors->has('cuenta'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('cuenta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



<div class="form-group row">
    <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Hora a la que abre    ') }}</label>
    <input type="time" class="form-control  col-md-4 " id="horaa" name="horaa" value="{{ old('horaa') }}"  step="1">

</div>

<div class="form-group row">
    <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Hora a la que cierra     ') }}</label>
    <input type="time" class="form-control  col-md-4 " id="horac" name="horac" value="{{ old('horac') }}" step="1">
</div>
<center>
<div class="container">
<div style="height: 400px; width: 400px">
 {!! Mapper::render()!!}
</div>
</div>
</center>
</div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

</div>
</form>
@endsection
