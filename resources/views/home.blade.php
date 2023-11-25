@extends('layouts.panel')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-header">¡Hola, {{ auth()->user()->name }}!</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <h4 style="font-weight: normal;" >¡Has accedido!, mantente actualizado/a con nuestras novedades. </h4>
            </div>
        </div>
    </div>
   
@endsection
