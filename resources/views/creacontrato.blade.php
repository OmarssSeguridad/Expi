 <!--<![endif]-->
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Contrato ') }}</div>


                <div class="card-body">
                    <form method="POST" action="{{ url('/creacontrato') }}">
                        @csrf
                        {{csrf_field()}}


    <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('precio') }}</label>

                            <div class="col-md-6">
                                <input id="precio" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="precio" value="{{ old('precio') }}" required autofocus>

                                @if ($errors->has('precio'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('precio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">



                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                            <div class="col-md-6">
                                <textarea id="descripcion" style="height: 500px;width: 400px" type="text-area" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" value="{{ old('descripcion') }}" required autofocus></textarea>

                                @if ($errors->has('descripcion'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


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
