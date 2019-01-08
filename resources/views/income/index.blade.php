@extends('layouts.app')

@section('content')

    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <h3 class="tourtipguide col-md-5"
                data-ttg-title="Hola"
                data-ttg-fa="fa fa-user"
                data-ttg-color="#069999"
               > Bienvenido <b class=" label"> {{Auth::user()->name}}</b></h3>

                <h5
                class="tourtipguide col-md-7"
                data-ttg-title="Serán unos sencillos pasos"
                data-ttg-color="#069999"
                >Vamos a generar el registro de tus ingresos para este mes: 
                    <button 
                    class="tourtipguide btn btn-default"
                    data-ttg-title="Click aquí"
                    data-ttg-color="#069999">
                        <a href="{{Route('income.create')}}">Registrar Ingresos</a>
                    </button>
                
                </h5>

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