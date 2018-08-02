@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (Auth::user()->tipo==1)
                <div class="card-header">Bienvenido</div>
                 @endif
                   @if (Auth::user()->tipo==2)
                <div class="card-header">Bienvenido :</div>
                 @endif




                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::user()->tipo==1)
                        <div class="card-header">
                        <center> <img alt="" class="mb-4" height="200" src="/expib.jpg" width="200">
                        </div></center>




                    @endif



                    @if (Auth::user()->tipo==2)

                      <div class="card-header">
                        <center> <img alt="" class="mb-4" height="200" src="/expib.jpg" width="200">
                        </div></center>

                    @endif







                </div>
            </div>
        </div>
    </div>
</div>
@endsection
