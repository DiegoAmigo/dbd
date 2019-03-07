@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="tipo_documento" class="col-md-4 col-form-label text-md-right">{{ __('tipo documento') }}</label>

                            <div class="col-md-6">

                                <select id="tipo_documento" class="form-control" name = "tipo_documento">
                                        
                                        
                                                <option value = 1>Cedula de identidad</option>
                                                <option value = 2>Pasaporte</option>
                                            
                                </select>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="numero_documento" class="col-md-4 col-form-label text-md-right">{{ __('numero documento') }}</label>

                            <div class="col-md-6">
                                <input id="numero_documento" type="int" class="form-control{{ $errors->has('numero_documento') ? ' is-invalid' : '' }}" name="numero_documento" value="{{ old('numero_documento') }}" required autofocus>

                                @if ($errors->has('numero_documento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numero_documento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="nombre_cliente" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="nombre_cliente" type="text" class="form-control{{ $errors->has('nombre_cliente') ? ' is-invalid' : '' }}" name="nombre_cliente" value="{{ old('nombre_cliente') }}" required autofocus>

                                @if ($errors->has('nombre_cliente'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre_cliente') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellido_cliente" class="col-md-4 col-form-label text-md-right">{{ __('apellido') }}</label>

                            <div class="col-md-6">
                                <input id="apellido_cliente" type="text" class="form-control{{ $errors->has('apellido_cliente') ? ' is-invalid' : '' }}" name="apellido_cliente" value="{{ old('apellido_cliente') }}" required autofocus>

                                @if ($errors->has('apellido_cliente'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apellido_cliente') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('fecha de nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_nacimiento" type="text" class="form-control{{ $errors->has('fecha_nacimiento') ? ' is-invalid' : '' }}" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required>
                                
                        <script>
                            var date = new Date(); 
                            var fin = new Date(date.getFullYear(), date.getMonth(), date.getDate());
                            var entrada = document.getElementById("fecha_nacimiento");
                            $(entrada).datepicker({
                              uiLibrary: 'bootstrap4',
                              locale: 'es-es',
                              maxDate: fin
                                
                            });
                        </script>

                                @if ($errors->has('fecha_nacimiento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        @inject('paisController', 'App\Http\Controllers\PaisController')
                                <?php 
                                    $datos =  $paisController->obtener_pais();
                                ?>

                        <div class="form-group row">
                            <label for="pais" class="col-md-4 col-form-label text-md-right">{{ __('pais') }}</label>
                            <div class="col-md-6">
                            <select id="pais" class="form-control" name = "pais">
                                
                                <optgroup  label="Seleccione un pais">
                                    @foreach($datos as $dato)
                                        <option>{{$dato->nombre_pais}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
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
