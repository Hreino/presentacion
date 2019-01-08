@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            
            <h1 class="label ">Editar Registro</h1>

           <div class="container">
                <form action="{{Route('users.update',$user->id)}}" method="POST">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="PATCH">
                
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                        <div class="col-md-6">
                            <input disabled id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">e-mail</label>

                        <div class="col-md-6">
                            <input disabled id="email" type="email" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="company" class="col-md-4 col-form-label text-md-right">Empresa</label>

                        <div class="col-md-6">
                        <input disabled id="company" type="text" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{ $user->company }}">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="role" class="col-md-4 col-form-label text-md-right">Rol</label>

                        <div class="col-md-6">
                            <select name="role" class="form-control">
                                <option value="0" class="bg-warning">Administrador</option>
                                <option value="1">Coach</option>
                                <option value="2">Usuario</option>
                            </select>
                            <small class="form-text text-muted">**Debe tener autorización por escrito para otorgar permisos de administrador</small>
                        </div>

                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-4 offset-md-4">
                            <a href="{{ route('users.index') }}" class="btn btn-sec-app" >Atrás</a>
                            <button type="submit" class="btn btn-app">
                                Modificar
                            </button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

@endsection