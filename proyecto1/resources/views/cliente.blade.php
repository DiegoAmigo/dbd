@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clientes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table>
                        <thead>

                            <tr>
                                <td>ID</td><td>Nombre</td>
                            </tr>
                        </thead>    
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->id}}</td>
                                <td>{{$cliente->nombre_cliente}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection