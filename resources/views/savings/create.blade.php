@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="container col-md-5 text-center">
                <h3
                class="label tourtipguide"
                data-ttg-title="Ahora registraremos tus ahorros"
                data-ttg-content="Incluya solamente los ahorros que hacen en dinero en efectivo."
                data-ttg-color="#069999"
                data-ttg-fa="fa fa-money"><b>Ahorros</b>
            </h3>

            <form action="{{Route('saving.store')}}" method="POST">
                    @csrf
                
                <div class="container">
                    <div class="form-group">
                        <label for="savingOne" class="label">Ahorro 1</label>
                        <input type="number" name="savingOne" placeholder="$ ----.--" step=".01" required
                        class="form-control tourtipguide"
                        data-ttg-title="Ingresa tu Ahorro Mensual"
                        data-ttg-color="#069999"
                        data-ttg-fa="fa fa-money">                     
                    </div>

                    <div class="form-group">
                        <label for="savingTwo" class="label">Ahorro 2</label>
                        <input type="number" name="savingTwo" placeholder="$ ----.--" step=".01" required
                        class="form-control tourtipguide"
                        data-ttg-title="Si Tienes Otro Ahorro Ingresalo Aquí"
                        data-ttg-content="De lo Contrario Ingresa 0"
                        data-ttg-color="#069999"
                        data-ttg-fa="fa fa-money">                     
                    </div>

                    <div class="form-group">
                        <label for="investmentPlan" class="label">Plan de Inversión</label>
                        <input type="number" name="investmentPlan" placeholder="$ ----.--" step=".01" required
                        class="form-control tourtipguide"
                        data-ttg-title="Ingresa El Monto Destinado para Tu Plan de Inversión"
                        data-ttg-content="De lo contrario, ingresa cero"
                        data-ttg-color="#069999"
                        data-ttg-fa="fa fa-money">                     
                    </div>
                </div>
                <div class="form-group">
                        <button
                        class="tourtipguide btn btn-default btn-app"
                        type="submit"
                        data-ttg-title="¡Listo! Click en el botón para hacer el registro de tus Ahorros"
                        data-ttg-fa="fa fa-mouse-pointer"
                        data-ttg-color="#069999"
                        >Registrar Ahorros</button>
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