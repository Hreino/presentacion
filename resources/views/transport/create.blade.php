@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="container col-md-5 text-center">
                <h3
                class="label tourtipguide"
                data-ttg-title="Ahora registraremos Gastos de Transporte"
                data-ttg-content="Incluya boletos de autobús. Si la familia posee mas de un auto, coloque la sumatoria de los gastos"
                data-ttg-color="#069999"
                data-ttg-fa="fa fa-car">Gastos de <b>Trasnporte</b>
                </h3>

                <form action="{{Route('transport.store')}}" method="POST">
                        @csrf
                    
                    <div class="container">
                        <div class="form-group">
                            <label for="monthlyPayments" class="label">Cuotas mensuales</label>
                            <input type="number" name="monthlyPayments" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingresa la cuota mensual por pago de auto"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-car">                     
                        </div>

                        <div class="form-group">
                            <label for="fuel" class="label">Gasolina</label>
                            <input type="number" name="fuel" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingresa El Monto Destinado para Gasolina"
                            data-ttg-content="De lo contrario, ingresa cero"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-car">                     
                        </div>

                        <div class="form-group">
                            <label for="carInsurance" class="label">Seguro de Autos</label>
                            <input type="number" name="carInsurance" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingresa El Monto Destinado para Gasolina"
                            data-ttg-content="De lo contrario, ingresa cero"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-car">                     
                        </div>

                        <div class="form-group">
                            <label for="maintainance" class="label">Mantenimiento del auto</label>
                            <input type="number" name="maintainance" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingresa El Monto Destinado para Mantenimiento"
                            data-ttg-content="De lo contrario, ingresa cero"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-wrench">                     
                        </div>
                        <div class="form-group">
                            <label for="publicTransport" class="label">Transporte Público</label>
                            <input type="number" name="publicTransport" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingresa El Monto Destinado para Transporte Público"
                            data-ttg-content="De lo contrario, ingresa cero"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-bus">                     
                        </div>

                        <div class="form-group">
                            <label for="taxi" class="label">Taxi</label>
                            <input type="number" name="taxi" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingresa El Monto Destinado para taxi"
                            data-ttg-content="De lo contrario, ingresa cero"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-taxi">                     
                        </div>

                        <div class="form-group">
                            <label for="other" class="label">Otros Gastos de Transporte</label>
                            <input type="number" name="other" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingresa el monto destinado para otros gastos de transporte"
                            data-ttg-content="De lo contrario, ingresa cero"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-bus">                     
                        </div>
                    </div>
                    <div class="form-group">
                            <button
                            class="tourtipguide btn btn-default btn-app"
                            type="submit"
                            data-ttg-title="¡Listo! Click en el botón para hacer el registro de tus gastos de Transporte"
                            data-ttg-fa="fa fa-mouse-pointer"
                            data-ttg-color="#069999"
                            >Registrar Gastos</button>
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