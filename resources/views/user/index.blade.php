@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th colspan="5" class="bg-app" style="border-bottom:2px solid black"><h3>Listado de Usuarios</h3></th>
                    </tr>
                </thead>
        
                <tbody>
                    <tr>
                        <td colspan="5" class="bg-app"><b>Empleados Empresa A</b></td>
                    </tr>
                    @foreach($a as $user)
                    <tr>
                        <td>{{$user -> name}}</td>
                        <td>{{$user -> email}}</td>
                        <td>{{$user -> company}}</td>
                        @if ($user ->role==0)
                            <td>Administrador</td>
                        @endif
                        @if ($user ->role==1)
                            <td>Coach</td>
                        @endif
                        @if ($user->role==2)
                            <td>Usuario</td>
                        @endif
                        <td>
                            <form action="{{Route('users.destroy',array($user->id))}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <a href="{{Route('users.edit',array($user->id))}}" class="btn  btn-sec-app">Modificar</a>
                                <button class="btn btn-app" type="Submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    <tr>
                        <td colspan="5" class="bg-app"><b>Empleados Empresa B</b></td>
                    </tr>
                    @foreach($b as $user)
                    <tr>
                        <td>{{$user -> name}}</td>
                        <td>{{$user -> email}}</td>
                        <td>{{$user -> company}}</td>
                        @if ($user ->role==0)
                            <td>Administrador</td>
                        @endif
                        @if ($user ->role==1)
                            <td>Coach</td>
                        @endif
                        @if ($user->role==2)
                            <td>Usuario</td>
                        @endif
                        <td>
                            <form action="{{Route('users.destroy',array($user->id))}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <a href="{{Route('users.edit',array($user->id))}}" class="btn  btn-sec-app">Modificar</a>
                                <button class="btn btn-app" type="Submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    <tr>
                        <td colspan="5" class="bg-app"><b>Empleados Empresa C</b></td>
                    </tr>
                    @foreach($c as $user)
                    <tr>
                        <td>{{$user -> name}}</td>
                        <td>{{$user -> email}}</td>
                        <td>{{$user -> company}}</td>
                        @if ($user ->role==0)
                            <td>Administrador</td>
                        @endif
                        @if ($user ->role==1)
                            <td>Coach</td>
                        @endif
                        @if ($user->role==2)
                            <td>Usuario</td>
                        @endif
                        <td>
                            <form action="{{Route('users.destroy',array($user->id))}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <a href="{{Route('users.edit',array($user->id))}}" class="btn  btn-sec-app">Modificar</a>
                                <button class="btn btn-app" type="Submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                        <tr>
                            <td colspan="5" class="bg-app"><b>Empleados Empresa D</b></td>
                        </tr>
                        @foreach($d as $user)
                        <tr>
                            <td>{{$user -> name}}</td>
                            <td>{{$user -> email}}</td>
                            <td>{{$user -> company}}</td>
                            @if ($user ->role==0)
                                <td>Administrador</td>
                            @endif
                            @if ($user ->role==1)
                                <td>Coach</td>
                            @endif
                            @if ($user->role==2)
                                <td>Usuario</td>
                            @endif
                            <td>
                                <form action="{{Route('users.destroy',array($user->id))}}" method="post">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <a href="{{Route('users.edit',array($user->id))}}" class="btn  btn-sec-app">Modificar</a>
                                    <button class="btn btn-app" type="Submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                </tbody>
            </table>
        </div>
    </div>
    

    
</div>

@endsection