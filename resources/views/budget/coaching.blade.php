@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table  table-bordered">
            <thead class="text-center">
                <tr>
                    <td colspan="4" class="bg-app" style="border-bottom:3px solid black"><h3>Listado de Presupuestos</h3></td>
                </tr>
            </thead>

            <tbody>
                <tr class="text-center">
                    <td colspan="4"><h4>Usuarios que recibirán Coaching de Empresa A</h4></td>
                </tr>
                @foreach ($coachBudgets as $presu)
                    @if ($presu->user->company == "Empresa A")
                         <tr class="text-center">
                            <td>{{$presu->user->name}}</td>
                            <td>{{$presu->mes}}</td>
                            <td>{{$presu->coaching}}</td>
                            <td><a  href="{{Route('budget.show', $presu->id)}}" class="btn  btn-default-app">Ver Detalles </a></td>
                        </tr> 
                    @endif
                @endforeach

                <tr class="text-center">
                    <td colspan="4"><h4>Usuarios que recibirán Coaching de Empresa B</h4></td>
                </tr>
                @foreach ($coachBudgets as $presu)
                    @if ($presu->user->company == "Empresa B")
                            <tr class="text-center">
                            <td>{{$presu->user->name}}</td>
                            <td>{{$presu->mes}}</td>
                            <td>{{$presu->coaching}}</td>
                            <td><a  href="{{Route('budget.show', $presu->id)}}" class="btn  btn-default-app">Ver Detalles </a></td>
                        </tr> 
                    
                    @endif
                @endforeach

                <tr class="text-center">
                    <td colspan="4"><h4>Usuarios que recibirán Coaching de Empresa C</h4></td>
                </tr>
                @foreach ($coachBudgets as $presu)
                    @if ($presu->user->company == "Empresa C")
                            <tr class="text-center">
                            <td>{{$presu->user->name}}</td>
                            <td>{{$presu->mes}}</td>
                            <td>{{$presu->coaching}}</td>
                            <td><a  href="{{Route('budget.show', $presu->id)}}" class="btn  btn-default-app">Ver Detalles </a></td>
                        </tr> 
                    
                    @endif
                @endforeach

                    <tr class="text-center">
                        <td colspan="4"><h4>Usuarios que recibirán Coaching de Empresa D</h4></td>
                    </tr>
                    @foreach ($coachBudgets as $presu)
                        @if ($presu->user->company == "Empresa D")
                                <tr class="text-center">
                                <td>{{$presu->user->name}}</td>
                                <td>{{$presu->mes}}</td>
                                <td>{{$presu->coaching}}</td>
                                <td><a  href="{{Route('budget.show', $presu->id)}}" class="btn  btn-default-app">Ver Detalles </a></td>
                            </tr> 
                        @else
                            <tr class="text-center text-danger">
                                <td colspan="4"><h5>Ningún usuario de esta empresa se ha inscrito para coaching</h5></td>
                            </tr>
                        @endif
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection