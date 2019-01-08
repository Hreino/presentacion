@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="container col-md-5 text-center">
                    <h3
                    class="label tourtipguide"
                    data-ttg-title="Registraremos sus gastos de Seguros"
                    data-ttg-content="Escriba la cantidad  que paga mensualmente en seguros"
                    data-ttg-color="#069999"
                    data-ttg-img="{{ asset('img/otherMed.png') }}"><b>Seguros</b>
                </h3>
    
                <form action="{{Route('insurances.store')}}" method="POST">
                        @csrf
                    
                    <div class="container">
                        <div class="form-group">
                            <label for="lifeInsurance" class="label">Seguro de Vida</label>
                            <input type="number" name="lifeInsurance" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el monto mensual por seguro de vida"
                            data-ttg-content="De lo contrario escriba 0"
                            data-ttg-color="#069999"
                            data-ttg-img="{{ asset('img/otherMed.png') }}">                     
                        </div>
    
                        <div class="form-group">
                            <label for="healthInsurance" class="label">Seguro Médico</label>
                            <input type="number" name="healthInsurance" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el monto mensual por seguro médico"   
                            data-ttg-content="De lo contrario escriba 0"                        
                            data-ttg-color="#069999"
                            data-ttg-img="{{ asset('img/otherMed.png') }}">                     
                        </div>

                        <div class="form-group">
                            <label for="other" class="label">Otros Seguros</label>
                            <input type="number" name="other" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Si tiene otros seguros ingrese la sumatoria aquí"
                            data-ttg-content="De lo contrario escriba 0"
                            data-ttg-color="#069999"
                            data-ttg-img="{{ asset('img/otherMed.png') }}">                     
                        </div>

                    </div>
                    <div class="form-group">
                        <button
                        class="tourtipguide btn btn-default btn-app"
                        type="submit"
                        data-ttg-title="¡Listo! Click en el botón para hacer el registro de sus pagos por seguros"
                        data-ttg-fa="fa fa-mouse-pointer"
                        data-ttg-color="#069999"
                        >Registrar Gasto</button>
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