@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Modulo</div>

                <div class="panel-body">
                    <p>
                        <a class="btn btn-info" href="{{ route('admin.modulos.create') }}" role="button">
                            Nuevo Modulo
                        </a>
                    </p>
                    @include('admin.modulo.partials.table');
                    {!! $modulos->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
