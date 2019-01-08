@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="container col-md-5 text-center">
                    <h3
                    class="label tourtipguide"
                    data-ttg-title="Registraremos sus gastos Varios"
                    data-ttg-content="Vamos a describir sus gastos varios"
                    data-ttg-color="#069999"
                    data-ttg-fa="fa fa-money">Gastos  <b>Varios</b>
                </h3>
    
                <form action="{{Route('other.store')}}" method="POST">
                        @csrf
                    
                    <div class="container">
                        <div class="form-group">
                            <label for="newspaper" class="label">Periódico</label>
                            <input type="number" name="newspaper" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el monto mensual por suscripción a periódico"
                            data-ttg-content="si no tiene suscripción pero compra periodicos ingrese un monto promedio mesual,
                                              de lo contario ingrese 0"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-newspaper-o">                     
                       </div>
    
                        <div class="form-group">
                            <label for="journals" class="label">Revitas</label>
                            <input type="number" name="journals" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el monto mensual por suscripción a revista"
                            data-ttg-content="si no tiene suscripción pero compra revistas ingrese un monto promedio mesual,
                                              de lo contario ingrese 0"                    
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-bookmark">                       
                        </div>

                        <div class="form-group">
                            <label for="subscriptionsOne" class="label">Suscripción 1</label>
                            <input type="number" name="subscriptionsOne" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el monto mensual por otra suscripción"
                            data-ttg-content="De lo contrario escriba 0"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-money">                      
                        </div>

                        <div class="form-group">
                            <label for="subscriptionTwo" class="label">Suscripción 2</label>
                            <input type="number" name="subscriptionTwo" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el monto mensual por otra suscripción"
                            data-ttg-content="De lo contrario escriba 0"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-money">                      
                        </div>

                        <div class="form-group">
                            <label for="makeup" class="label">Maquillaje</label>
                            <input type="number" name="makeup" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el monto mensual por compras de maquillaje"
                            data-ttg-content="De lo contrario escriba 0"
                            data-ttg-color="#069999"
                            data-ttg-img="{{ asset('img/makeup.jpg')}}">                      
                        </div>

                        <div class="form-group">
                            <label for="hairdressing" class="label">Peluquería</label>
                            <input type="number" name="hairdressing" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el monto mensual por pago de Cortes de Cabello"
                            data-ttg-content="De lo contrario escriba 0"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-cut">                      
                        </div>

                        <div class="form-group">
                            <label for="laundry" class="label">Lavandería</label>
                            <input type="number" name="laundry" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el monto mensual por servicios de lavadería"
                            data-ttg-content="De lo contrario escriba 0"
                            data-ttg-color="#069999"
                            data-ttg-img="{{ asset('img/laundry.jpg')}}">                       
                        </div>

                        <div class="form-group">
                            <label for="coffee" class="label">Cafés</label>
                            <input type="number" name="coffee" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide" 
                            data-ttg-title="Ingrese el monto mensual por salidas a tomar Café"
                            data-ttg-content="De lo contrario escriba 0"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-coffee">                       
                        </div>

                        <div class="form-group">
                            <label for="feesToClubs" class="label">Clubes</label>
                            <input type="number" name="feesToClubs" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el monto mensual por membresías a Clubles"
                            data-ttg-content="De lo contrario escriba 0"
                            data-ttg-color="#069999"
                            data-ttg-img="{{ asset('img/golf.jpg')}}">                       
                        </div>

                        <div class="form-group">
                            <label for="dialyMoney" class="label">Cuota de Dinero</label>
                            <input type="number" name="dialyMoney" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el monto mensual promedio de dinero que gasta diariamente"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-money">                       
                        </div>

                        <div class="form-group">
                            <label for="birthdays" class="label">Cumpleaños</label>
                            <input type="number" name="birthdays" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el monto mensual promedio de dinero que gasta en celebraciones de cumpleaños"
                            data-ttg-content="De lo contrario escriba 0"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-gift">                       
                        </div>

                        <div class="form-group">
                            <label for="aniversaries" class="label">Aniversarios</label>
                            <input type="number" name="aniversaries" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el monto mensual promedio de dinero que gasta en celebraciones de aniversarios"
                            data-ttg-content="De lo contrario escriba 0"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-gift">                       
                        </div>

                        <div class="form-group">
                                <label for="christmas" class="label">Celebraciones Navideñas</label>
                                <input type="number" name="christmas" placeholder="$ ----.--" step=".01" required
                                class="form-control tourtipguide"
                                data-ttg-title="Ingrese el monto mensual promedio de dinero que gasta en celebraciones navideñas"
                                data-ttg-content="De lo contrario escriba 0"
                                data-ttg-color="#069999"
                                data-ttg-fa="fa fa-tree">                       
                        </div>

                        <div class="form-group">
                                <label for="familySupport" class="label">Apoyo Familiar</label>
                                <input type="number" name="familySupport" placeholder="$ ----.--" step=".01" required
                                class="form-control tourtipguide"
                                data-ttg-title="Ingrese el monto mensual por apoyo a familiares"
                                data-ttg-content="De lo contrario escriba 0"
                                data-ttg-color="#069999"
                                data-ttg-fa="fa fa-money">                       
                        </div>

                        <div class="form-group">
                                <label for="other" class="label">Otros Gastos</label>
                                <input type="number" name="other" placeholder="$ ----.--" step=".01" required
                                class="form-control tourtipguide"
                                data-ttg-title="Ingrese el monto mensual por otros gastos"
                                data-ttg-content="De lo contrario escriba 0"
                                data-ttg-color="#069999"
                                data-ttg-fa="fa fa-money">                       
                        </div>

                    </div>
                    <div class="form-group">
                        <button
                        class="tourtipguide btn btn-default btn-app"
                        type="submit"
                        data-ttg-title="¡Listo! Click en el botón para hacer el registro de sus pagos por gastos varios"
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