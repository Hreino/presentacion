@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="container col-md-5 text-center">
                    <h3
                    class="label tourtipguide"
                    data-ttg-title="Registraremos sus gastos de Educación"
                    data-ttg-content="Escriba la cantidad  que paga mensualmente en educación"
                    data-ttg-color="#069999"
                    data-ttg-fa="fa fa-book">Gastos de <b>Educación</b>
                </h3>
    
                <form action="{{Route('education.store')}}" method="POST">
                        @csrf
                    
                    <div class="container">
                        <div class="form-group">
                            <label for="college" class="label">Universidad</label>
                            <input type="number" name="college" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el monto mensual por pago de Universidad"
                            data-ttg-content="De lo contrario escriba 0"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-graduation-cap">                     
                        </div>
    
                        <div class="form-group">
                            <label for="school" class="label">Colegio</label>
                            <input type="number" name="school" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el monto mensual por pago de colegiaturas"   
                            data-ttg-content="De lo contrario escriba 0"                        
                            data-ttg-color="#069999"
                            data-ttg-img="{{ asset('img/school.png') }}">                     
                        </div>

                        <div class="form-group">
                            <label for="enrollment" class="label">Matrículas</label>
                            <input type="number" name="enrollment" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el monto  por pago de matriculas"
                            data-ttg-content="De lo contrario escriba 0"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-money">                      
                        </div>

                        <div class="form-group">
                            <label for="books" class="label">Libros</label>
                            <input type="number" name="books" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el monto  por compra de Libros"
                            data-ttg-content="De lo contrario escriba 0"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-book">                      
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