@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="container col-md-5 text-center">
                    <h3
                    class="label tourtipguide"
                    data-ttg-title="Registraremos sus gastos en Vestuario"
                    data-ttg-content="Escriba la cantidad  promedio que gasta mensualmente, en vestirse y vestir a su familia.</br>(Si la tiene)"
                    data-ttg-color="#069999"
                    data-ttg-img="{{ asset('img/socks.png') }}">Gastos de <b>Ropa</b>
                </h3>
    
                <form action="{{Route('clothing.store')}}" method="POST">
                        @csrf
                    
                    <div class="container">
                        <div class="form-group">
                            <label for="clothes" class="label">Ropa</label>
                            <input type="number" name="clothes" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el gasto en ropa"
                            data-ttg-color="#069999"
                            data-ttg-img="{{ asset('img/socks.png') }}">                     
                        </div>
    
                        <div class="form-group">
                            <label for="shoes" class="label">Zapatos</label>
                            <input type="number" name="shoes" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el gasto en zapatos"                           
                            data-ttg-color="#069999"
                            data-ttg-img="{{ asset('img/shoes.jpg') }}">                     
                        </div>

                        <div class="form-group">
                            <label for="kidsClothing" class="label">Ropa de Niños</label>
                            <input type="number" name="kidsClothing" placeholder="$ ----.--" step=".01" required
                            class="form-control tourtipguide"
                            data-ttg-title="Ingrese el gasto en ropa para niños"
                            data-ttg-content="De lo contrario escriba 0"
                            data-ttg-color="#069999"
                            data-ttg-img="{{ asset('img/kids.png') }}">                     
                        </div>

                    </div>
                    <div class="form-group">
                            <button
                            class="tourtipguide btn btn-default btn-app"
                            type="submit"
                            data-ttg-title="¡Listo! Click en el botón para hacer el registro de sus gastos en Vestuario"
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