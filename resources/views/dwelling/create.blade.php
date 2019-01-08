@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="container col-md-5 text-center">
                <h3
                class="label tourtipguide"
                data-ttg-title="Procederemos a ingresar los gastos de vivienda"
                data-ttg-color="#069999"
                data-ttg-fa="fa fa-home">Gastos de <b>Vivienda</b></h3>


                <form action="{{Route('dwelling.store')}}" method="POST">
                        @csrf
                    
                    <div class="container">
                            <div class="form-group">
                                <label for="rent" class="label">Renta</label>
                                <input type="number" name="rent" placeholder="$ ----.--" step=".01" required
                                class="form-control tourtipguide"
                                data-ttg-title="Ingresa el Monto por renta"
                                data-ttg-content="Si no pagas renta, por favor ingresa 0"
                                data-ttg-color="#069999"
                                data-ttg-fa="fa fa-home">                     
                            </div>
        
                            <div class="form-group">
                                <label for="mortgage" class="label">Hipoteca</label> 
                                <input type="number" name="mortgage" placeholder="$ ----.--" step=".01" required
                                class="form-control tourtipguide"
                                data-ttg-title="Ingresa el monto por hipoteca"
                                data-ttg-content="Si no pagas hipoteca, por favor ingresa 0"
                                data-ttg-color="#069999"
                                data-ttg-fa="fa fa-money">    
                            </div>
        
                            <div class="form-group">
                                <label for="insurance" class="label">Seguro</label>
                                <input type="number" name="insurance" placeholder="$ ----.--" step=".01" required
                                class="form-control tourtipguide"
                                data-ttg-title="Ingresa el monto por seguros"
                                data-ttg-content="Si no pagas seguros, por favor ingresa 0"
                                data-ttg-color="#069999"
                                data-ttg-fa="fa fa-money">    
                            </div>
        
                            <div class="form-group">
                                <label for="electricity" class="label">Electricidad</label>
                                <input type="number" name="electricity" placeholder="$ ----.--" step=".01" required
                                class="form-control tourtipguide"
                                data-ttg-title="Ingresa el monto por pago de electricidad"
                                data-ttg-color="#069999"
                                data-ttg-fa="fa fa-bolt">    
                            </div>
        
                            <div class="form-group">
                                <label for="propaneGas" class="label">Gas</label>
                                <input type="number" name="propaneGas" placeholder="$ ----.--" step=".01" required
                                class="form-control tourtipguide"
                                data-ttg-title="Ingresa el monto por consumo de gas"
                                data-ttg-color="#069999"
                                data-ttg-fa="fa fa-fire">    
                            </div>
        
                            <div class="form-group">
                                <label for="phone" class="label">Teléfono</label>
                                <input type="number" name="phone" placeholder="$ ----.--" step=".01" required
                                class="form-control tourtipguide"
                                data-ttg-title="Ingresa el monto por servicios de telefonía"
                                data-ttg-color="#069999"
                                data-ttg-fa="fa fa-phone">    
                            </div>
        
                            <div class="form-group">
                                <label for="drinkingWater" class="label">Agua Potable</label>
                                <input type="number" name="drinkingWater" placeholder="$ ----.--" step=".01" required
                                class="form-control tourtipguide"
                                data-ttg-title="Ingresa el monto por servicios de agua"
                                data-ttg-color="#069999"
                                data-ttg-fa="fa fa-home">    
                            </div>
        
        
                            <div class="form-group">
                                <label for="maintainance" class="label">Mantenimiento</label>
                                <input type="number" name="maintainance" placeholder="$ ----.--" step=".01" required
                                class="form-control tourtipguide"
                                data-ttg-title="Ingresa el monto por mantenimiento de Vivienda"
                                data-ttg-color="#069999"
                                data-ttg-fa="fa fa-home">    
                            </div>
        
                            <div class="form-group">
                                <label for="cableTV" class="label">TV por Cable o Satelital</label>
                                <input type="number" name="cableTV" placeholder="$ ----.--" step=".01" required
                                class="form-control tourtipguide"
                                data-ttg-title="Ingresa el monto por servcios de TV"
                                data-ttg-color="#069999"
                                data-ttg-fa="fa fa-tv">    
                            </div>
        
                            <div class="form-group">
                                <label for="internet" class="label">Internet</label>
                                <input type="number" name="internet" placeholder="$ ----.--" step=".01" required
                                class="form-control tourtipguide"
                                data-ttg-title="Ingresa el monto por servcios de Internet"
                                data-ttg-color="#069999"
                                data-ttg-fa="fa fa-internet-explorer">    
                            </div>
        
                            <div class="form-group">
                                <label for="projects" class="label">Proyectos</label>
                                <input type="number" name="projects" placeholder="$ ----.--" step=".01" required
                                class="form-control tourtipguide"
                                data-ttg-title="Ingresa destinado para tus proyectos"
                                data-ttg-color="#069999"
                                data-ttg-fa="fa fa-tasks">    
                            </div>
        
                            <div class="form-group">
                                <label for="other" class="label">Otros gastos</label>
                                <input type="number" name="other" placeholder="$ ----.--" step=".01" required
                                class="form-control tourtipguide"
                                data-ttg-title="¿Otros gastos de vivienda?"
                                data-ttg-content="Si no tienes otros gastos, por favor ingresa 0"
                                data-ttg-color="#069999"
                                data-ttg-fa="fa fa-question">    
                            </div>
                    </div>
                    

                    

                    <div class="form-group">
                        <button
                        class="tourtipguide btn btn-default btn-app"
                        type="submit"
                        data-ttg-title="¡Listo! Click en el botón para hacer el registro de tus gastos de Vivienda"
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