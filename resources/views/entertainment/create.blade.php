@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="container col-md-5 text-center">
                    <h3
                    class="label tourtipguide"
                    data-ttg-title="Registraremos sus Actividades de Entretenimiento"
                    data-ttg-content="Escriba el Monto Total de las últimas vacaciones dividido entre 12, para que le dé  el 
                                      promedio de dinero mesual que debe reservar para ese gasto."
                    data-ttg-color="#069999"
                    data-ttg-fa="fa fa-map-marker"><b>Entretenimiento</b>
                </h3>
    
                <form action="{{Route('entertainment.store')}}" method="POST">
                        @csrf
                    
                    <div class="container">
                        <div class="form-group">
                            <label for="travels" class="label">Salidas de paseo</label>
                            <input type="number" name="travels" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el Monto mensual de sus salidas de paseo"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-car">                     
                        </div>
    
                        <div class="form-group">
                            <label for="restaurants" class="label">Restaurantes</label>
                            <input type="number" name="restaurants" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el Monto del consumo mensual de restaurantes"                           
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-spoon">                     
                        </div>

                        <div class="form-group">
                            <label for="vacations" class="label">Vacaciones</label>
                            <input type="number" name="vacations" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Escriba el Monto Total de las últimas vacaciones dividido entre 12, para que le dé  el 
                            promedio de dinero mesual que debe reservar para ese gasto."
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-plane">                     
                        </div>

                        <div class="form-group">
                            <label for="other" class="label">Otros Entretenimientos</label>
                            <input type="number" name="other" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el Monto de otros entretenimientos"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-ticket">                     
                        </div>

                    </div>
                    <div class="form-group">
                            <button
                            class="tourtipguide btn btn-default btn-app"
                            type="submit"
                            data-ttg-title="¡Listo! Click en el botón para hacer el registro de sus Activades de Entretenimiento"
                            data-ttg-fa="fa fa-mouse-pointer"
                            data-ttg-color="#069999"
                            >Registrar Entretenimiento</button>
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