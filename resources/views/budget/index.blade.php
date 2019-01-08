@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="label">Listado de Presupuestos</h1>
        <table class="table table-hover table-stripped table-bordered">
            <thead class="text-center">
                <tr>
                    <th>Usuario</th>
                    <th>Mes</th>
                    <th>Coaching</th>
                    <td>Detalles</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($userBudgets as $presu)
                    <tr class="text-center">
                        <td>{{auth()->user()->name}}</td>
                        <td>{{$presu->mes}}</td>
                        <td>{{$presu->coaching}}</td>
                        <td>
                           
                                <a class="btn btn-default-app" href="{{Route('budget.show', $presu->id)}}">Ver Detalles </a>
                            
                        </td>
                    </tr> 
                @endforeach
            

                

                
            </tbody>
        </table>
    </div>
@endsection