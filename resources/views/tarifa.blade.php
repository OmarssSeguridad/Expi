@extends('layouts.app')
@section('title','servicio')
@section('content')

<form method="POST" action="{{ url('tarifa/'.$servicio->idservi)}}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('  Datos del estacionamiento  ') }}</div>
                <div class="card-body">
                       @csrf
                        {{csrf_field()}}


                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del estacionamiento') }}</label>
                            <div class="col-md-6">
                                <input id="nombree" type="text" class="form-control{{ $errors->has('nombree') ? ' is-invalid' : '' }}" name="nombree" readonly="l" value="{{ $servicio->nombreestacionamiento }}">
                            </div>
                        </div>
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
                <div class="card-header">{{ __('  Tarifa (Nueva)') }}</div>
                <div class="card-body">
  <div class="form-group row">

     <div class="form-group col-1">
</div>
     <div class="form-group col-5">

                            <label for="tel" class="col-md-8 col-form-label text-md-left">{{ __('Tiempo base') }}</label>
 <div class="form-group row">
                            <div class="col-4">
                                <input id="tibh" type="number" placeholder="horas" class="form-control{{ $errors->has('tibh') ? ' is-invalid' : '' }}" name="tibh"  maxlength="2" max="59" value="{{ old('tibh') }}" required autofocus>
                                @if ($errors->has('tibh'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tibh') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="tel" class="col-form-label text-md-left"><b>:</b></label>
                            <div class="col-4">
                                <input id="tibm" type="text"  placeholder="min" class="form-control{{ $errors->has('tibm') ? ' is-invalid' : '' }}" name="tibm" value="{{ old('tibm') }}" required autofocus>
                                @if ($errors->has('tibm'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tibm') }}</strong>
                                    </span>
                                @endif
                            </div>
  </div>


                        </div>
  <div class="form-group col-6">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Tarifa base') }}</label>

                            <div class="col-md-6">
                                <input id="tb" type="text" class="form-control{{ $errors->has('tib') ? ' is-invalid' : '' }}" name="tib" value="{{ old('tib') }}" required autofocus>
                                @if ($errors->has('tib'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tib') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
</div>
<div class="form-group row">

     <div class="form-group col-1">
</div>
     <div class="form-group col-5">
                            <label for="tel"  class="col-md-8 col-form-label text-md-left">{{ __('Tiempo agrado') }}</label>

                       <div class="form-group row">
                            <div class="col-4">
                                <input id="tiah" type="text"   placeholder="horas" class="form-control{{ $errors->has('tiah') ? ' is-invalid' : '' }}" name="tiah" value="{{ old('tiah') }}" required autofocus>
                                @if ($errors->has('tiah'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tiah') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="tel" class="col-form-label text-md-left"><b>:</b></label>
                            <div class="col-4">
                                <input id="tiam" type="text"placeholder="min"class="form-control{{ $errors->has('tiam') ? ' is-invalid' : '' }}" name="tiam" value="{{ old('tiam') }}" required autofocus>
                                @if ($errors->has('tiam'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tiam') }}</strong>
                                    </span>
                                @endif
                            </div>
  </div>
                        </div>
  <div class="form-group col-6">
                            <label for="tel" class="col-ms-6 col-form-left text-md-left">{{ __('Tarifa tiempo agrado') }}</label>

                            <div class="col-md-6">
                                <input id="tta" type="text" class="form-control{{ $errors->has('tia') ? ' is-invalid' : '' }}" name="tia" value="{{ old('tia') }}" required autofocus>
                                @if ($errors->has('tia'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
</div>
<div class="form-group row">
 <div class="form-group col-1">
</div>
     <div class="form-group col-5">
                            <label for="tel"  class="col-md-8 col-form-label text-md-left">{{ __('Tiempo de gracia') }}</label>

                         <div class="form-group row">
                            <div class="col-4">
                                <input id="tigh" placeholder="horas" type="text"class="form-control{{ $errors->has('tigh') ? ' is-invalid' : '' }}" name="tigh" value="{{ old('tigh') }}" required autofocus>
                                @if ($errors->has('tigh'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tigh') }}</strong>
                                    </span>
                                @endif
                            </div>
                             <label for="tel" class="col-form-label text-md-left"><b>:</b></label>
                            <div class="col-4">
                                <input id="tigm" type="text"  placeholder="min" class="form-control{{ $errors->has('tigm') ? ' is-invalid' : '' }}" name="tigm" value="{{ old('tigm') }}" required autofocus>
                                @if ($errors->has('tigm'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tigm') }} jkdfhkdjahgkjqs</strong>
                                    </span>
                                @endif
                            </div>
  </div>
                        </div>
</div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Aceptar') }}
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

</div>

</form>
@endsection
