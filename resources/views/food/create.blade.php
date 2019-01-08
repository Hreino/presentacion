@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="container col-md-5 text-center">
                <h3
                    class="label tourtipguide"
                    data-ttg-title="Ahora registraremos los gastos de Alimentación"
                    data-ttg-content="No incluya comidas fuera de casa, eso lo registraremos en la categoría Entretenimiento"
                    data-ttg-color="#069999"
                    data-ttg-fa="fa fa-spoon">Gastos de <b>Alimentación</b>
                </h3>

                <form action="{{Route('food.store')}}" method="POST">
                        @csrf
                    
                    <div class="container">
                        <div class="form-group">
                            <label for="superMarket" class="label">Supermercado</label>
                            <input type="number" name="superMarket" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingresa el gasto destinado a supermercado"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-cart-plus">                     
                        </div>

                        <div class="form-group">
                            <label for="market" class="label">Mercado</label>
                            <input type="number" name="market" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingresa el gasto destinado a compras en mercado"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-shopping-basket">                     
                        </div>

                        <div class="form-group">
                            <label for="other" class="label">Otros gastos</label>
                            <input type="number" name="other" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Si tienes otros gastos en alimentación, ingrésalos aquí"
                            data-ttg-content="De lo contrario, ingresa cero"
                            data-ttg-color="#069999"
                            data-ttg-fa="fa fa-shopping-basket">                     
                        </div>
                    </div>
                    <div class="form-group">
                            <button
                            class="tourtipguide btn btn-default btn-app"
                            type="submit"
                            data-ttg-title="¡Listo! Click en el botón para hacer el registro de tus gastos de Alimentación"
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