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
                                <input id="tipo_documento" type="int" class="form-control{{ $errors->has('tipo_documento') ? ' is-invalid' : '' }}" name="tipo_documento" value="{{ old('tipo_documento') }}" required autofocus>

                                @if ($errors->has('tipo_documento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tipo_documento') }}</strong>
                                    </span>
                                @endif
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
                            <label for="correo_cliente" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="correo_cliente" type="correo_cliente" class="form-control{{ $errors->has('correo_cliente') ? ' is-invalid' : '' }}" name="correo_cliente" value="{{ old('correo_cliente') }}" required>

                                @if ($errors->has('correo_cliente'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('correo_cliente') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('fecha de nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_nacimiento" type="text" class="form-control{{ $errors->has('fecha_nacimiento') ? ' is-invalid' : '' }}" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required>

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
