@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Modulo</div>
                 <div class="panel-body">
                     {!! Form::open(['route' => 'admin.modulos.store', 'method' => 'POST']) !!}
                        @include('admin.modulo.partials.fields');
                         <button type="submit" class="btn btn-default">Crear Modulo</button>
                     {!! Form::close() !!}
                 </div>
             HOLA MUNDO
            </div>
        </div>
    </div>
</div>
@endsection
