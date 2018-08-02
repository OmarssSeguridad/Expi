@extends('layouts.app')
@section('title',"Administrador {$admin->idadmin}")
@section('content')






  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="../theme/theme.css">
  <link rel="stylesheet" href="assets/css/style.css?hash=63795e6e42f6869ed32efdee9379e266966d8fdf">

-->

  <script src="js/vendor.min.js"></script>
  <script src="js/runtime.min.js"></script>
  <!-- assets attached to the page -->
<!--
{Datos del administrador}
{{$admin->idadmin}}
{{$admin->email}}
{{$admin->precio}}
{{$admin->ap}}
{{$admin->am}}
-->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Datos de administrador') }}</div>

                <div class="card-body">
                    <form >
                        @csrf
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del administrador') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" value="{{ $admin->nombre}} {{$admin->ap}} {{$admin->am }}"  class="form-control" readonly="jaja" required autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                              <div class="col-md-6">
                                <input id="nombre" type="text" value="{{ $admin->email}} "  class="form-control" readonly="jaja" required autofocus>

                            </div>
                            </div>
                        </div>


</div>




                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




   <center> <h2><b>{{ __('Contrato') }}</b></h2></center>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('  Formulario') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/contratos') }}">
                        @csrf
                        {{csrf_field()}}



                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" value="{{ old('descripcion') }}" required autofocus>

                                @if ($errors->has('descripcion'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="precio" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                            <div class="col-md-6">
                                <input id="precio" type="text" class="form-control{{ $errors->has('precio') ? ' is-invalid' : '' }}" name="precio" value="{{ old('precio') }}" required autofocus>

                                @if ($errors->has('precio'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('precio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





 <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de inicio') }}</label>
 <div class="col-md-4">
    <input type="Date" name="hora"  class="form-control" step="1">
    </div>

                        </div>


 <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de termino') }}</label>
 <div class="col-md-4">
    <input type="Date" name="hora"  class="form-control" step="1">
    </div>

                        </div>


 <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Fecha pago') }}</label>
 <div class="col-md-4">
    <input type="Date" name="hora"  class="form-control" step="1">
    </div>

                        </div>


 <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de corte') }}</label>
 <div class="col-md-4">
    <input type="Date" name="hora"  class="form-control" step="1">
    </div>

                        </div>






 <!--<![endif] Leo-->






<center>
  <div>
    <label  class="col-md-4 col-form-label ">{{ __(' ') }}</label>
       </div>
       <div>           <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar') }}
                                </button>
</div>

</center>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
