@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 >Hola <b class="label">{{auth()->user()->name}}</b></h1>

                <h3>Procederemos a crear tu presupuesto para este mes.... </h3>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-5 text-center">
                <form action="{{Route('budget.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="mes" class="label">Mes</label>
                        <select name="mes" class="form-control tourtipguide"
                        data-ttg-title="Por favor {{auth()->user()->name}} indica para qué mes es el presupuesto"
                        data-ttg-fa="fa fa-calendar"
                        data-ttg-color="#069999"
                        >
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>
                            <option value="Abril">Abril</option>
                            <option value="Mayo">Mayo</option>
                            <option value="Junio">Junio</option>
                            <option value="Julio">Julio</option>
                            <option value="Agosto">Agosto</option>
                            <option value="Septiembre">Septiembre</option>
                            <option value="Octubre">Octubre</option>
                            <option value="Noviembre">Noviembre</option>
                            <option value="Diciembre">Diciembre</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="coaching" class="label">Coaching</label>
                        <select name="coaching" class="form-control tourtipguide"
                        data-ttg-title="¿Recibirás asistencia financiera este mes?"
                        data-ttg-fa="fa fa-user"
                        data-ttg-color="#069999"
                        >
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    

                    <div class="form-group">
                        <button
                        class="tourtipguide btn btn-default btn-app"
                        type="submit"
                        data-ttg-title="¡Listo! Click en el botón para hacer el registro"
                        data-ttg-fa="fa fa-mouse-pointer"
                        data-ttg-color="#069999"
                        >Iniciar Presupuesto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function($) {

            $.ttgTour({
                next: "SIG",
                prev: "PREV",
                finish: "FINAL" 
            });

        });
    </script>
@endsection