@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h1>Lista de Tareas</h1>

        @foreach($tareas as $tarea)
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $tarea->tarea }}
                </div>
                <div class="panel-body">
                    {{ $tarea->completado }}
                      
                    
                    <a href="#" class="pull-right">Leer más</a>
                </div>
            </div>
        @endforeach
        {{ $tareas->render() }}
    </div>
</div>

@endsection