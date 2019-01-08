@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="container col-md-5 text-center">
                    <h3
                    class="label tourtipguide"
                    data-ttg-title="Registraremos sus Deudas"
                    data-ttg-content="Escríba el pago promedio o el pago mínimo mensual para saldar todas sus deudas.
                                      </br>(No incluye el pago de su casa)."
                    data-ttg-color="#069999"
                    data-ttg-fa="fa fa-calculator">Pago de <b>Deudas</b>
                </h3>
    
                <form action="{{Route('debts.store')}}" method="POST">
                        @csrf
                    
                    <div class="container">
                        <div class="form-group">
                            <label for="creditCardOne" class="label">Tarjeta de crédito 1</label>
                            <input type="number" name="creditCardOne" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el Monto de su tarjeta de Crédito 1"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-credit-card">                     
                        </div>
    
                        <div class="form-group">
                            <label for="creditCardTwo" class="label">Tarjeta de crédito 2</label>
                            <input type="number" name="creditCardTwo" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el Monto de su tarjeta de Crédito 2"
                            data-ttg-content="De lo Contrario Ingrese 0"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-credit-card">                     
                        </div>

                        <div class="form-group">
                            <label for="creditCardThree" class="label">Tarjeta de crédito 3</label>
                            <input type="number" name="creditCardThree" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el Monto de su tarjeta de Crédito 3"
                            data-ttg-content="De lo Contrario Ingrese 0"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-credit-card">                     
                        </div>

                        <div class="form-group">
                            <label for="creditCardFour" class="label">Tarjeta de crédito 4</label>
                            <input type="number" name="creditCardFour" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el Monto de su tarjeta de Crédito 4"
                            data-ttg-content="De lo Contrario Ingrese 0"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-credit-card">                     
                        </div>
    
                        <div class="form-group">
                            <label for="loanOne" class="label">Préstamo 1</label>
                            <input type="number" name="loanOne" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese El Monto de su Prestamo 1"                        
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-dollar">                     
                        </div>

                        <div class="form-group">
                            <label for="loanTwo" class="label">Préstamo 2</label>
                            <input type="number" name="loanTwo" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese El Monto de su Prestamo 2"                        
                            data-ttg-content="De lo Contrario Ingrese 0"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-dollar">                     
                        </div>

                        <div class="form-group">
                            <label for="loanThree" class="label">Préstamo 3</label>
                            <input type="number" name="loanThree" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese El Monto de su Prestamo 3"                        
                            data-ttg-content="De lo Contrario Ingrese 0"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-dollar">                     
                        </div>

                        <div class="form-group">
                            <label for="loanFour" class="label">Préstamo 4</label>
                            <input type="number" name="loanFour" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese El Monto de su Prestamo 4"                        
                            data-ttg-content="De lo Contrario Ingrese 0"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-dollar">                     
                        </div>

                       <div class="form-group">
                            <label for="other" class="label">Otras deudas</label>
                            <input type="number" name="other" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Si tiene otras deudas haga la sumatoria e ingrese el total"                        
                            data-ttg-content="De lo Contrario Ingrese 0"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-dollar">                     
                        </div>
    

                    </div>
                    <div class="form-group">
                            <button
                            class="tourtipguide btn btn-default btn-app"
                            type="submit"
                            data-ttg-title="¡Listo! Click en el botón para hacer el registro de sus Deudas"
                            data-ttg-fa="fa fa-mouse-pointer"
                            data-ttg-color="#069999"
                            >Registrar Deudas</button>
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