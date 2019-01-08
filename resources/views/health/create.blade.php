@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="container col-md-5 text-center">
                <h3
                    class="label tourtipguide"
                    data-ttg-title="Ahora registraremos los gastos de Salud"
                    data-ttg-content="Escriba la cantidad promedio que gasta mensualmente, en la salud personal y familiar."
                    data-ttg-color="#069999"
                    data-ttg-fa="fa fa-ambulance">Gastos de <b>Salud</b>
                </h3>

                <form action="{{Route('health.store')}}" method="POST">
                        @csrf
                    
                    <div class="container">
                        <div class="form-group">
                            <label for="doctors" class="label">Pagos de consultas Médicas</label>
                            <input type="number" name="doctors" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingresa el pago promedio por consulta médica"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-user-md">                     
                        </div>

                        <div class="form-group">
                            <label for="dentist" class="label">Consultas o tratamientos Odontológicos</label>
                            <input type="number" name="dentist" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingresa el pago promedio por consulta Odontológica"
                            data-ttg-color="#069999"
                        data-ttg-img="{{asset('img/teeth.jpg')}}">                     
                        </div>

                        <div class="form-group">
                            <label for="meds" class="label">Medicinas</label>
                            <input type="number" name="meds" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingresa el pago  promedio de medicamentos"
                            data-ttg-color="#069999"
                            data-ttg-img="{{asset('img/meds.png')}}">                     
                        </div>

                        <div class="form-group">
                                <label for="other" class="label">Otros Gastos de Salud</label>
                                <input type="number" name="other" placeholder="$ ----.--" step=".01" required
                                class="form-control tourtipguide"
                                data-ttg-title="Si tiene otros gastos ingrese la sumatoria aquí"
                                data-ttg-content="De lo contrario ingrese 0"
                                data-ttg-color="#069999"
                                data-ttg-img="{{asset('img/otherMed.png')}}">                     
                            </div>
                    </div>
                    <div class="form-group">
                            <button
                            class="tourtipguide btn btn-default btn-app"
                            type="submit"
                            data-ttg-title="¡Listo! Click en el botón para hacer el registro de tus gastos médicos"
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