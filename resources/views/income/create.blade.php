@extends('layouts.app')

@section('content')

    <div class="container ">
        <div class="row justify-content-center">
            <div class="container col-md-5">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="container col-md-10 text-center">
                <h3
                    class="label tourtipguide"
                    data-ttg-title="Procederemos a registrar los Ingresos Familiares"
                    data-ttg-color="#069999"
                    data-ttg-fa="fa fa-home">Ingresos <b>Familiares</b></h3>
                   <hr>
        {{-- Modal --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Otros Ingresos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                        <input type="text" name="categoria" id="categoria" placeholder="Categoría p.ej: 'Venta de Cosméticos'" class="form-control">
                                        <input type="number" step=".01" name="monto" id="monto" placeholder="Monto ($---.--)" class="form-control">
                                        
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                        <button type="button" class="btn btn-success"  data-dismiss="modal" id="addOtros">Agregar a Otros</button>

                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
                </div>
            </div>
        </div>
        {{-- Modal --}}

            <form>
                   <div class="row">
                     <div class="col-md 1">
                        <div id="column_left">
                            <div class="my-fixed-item">
                                 <p><b><h4>Ingresos Familiares</h4></b></p>
                                 <p>Anote la cantidad de dinero que trae 
                                   al hogar mesualmente.
                                </p>                                           
                            </div>
                        </div> 
                     </div>
                   </div>
                    <div class="form-group">
                        <label for="husbandIncome" class="label">Ingresos Esposo</label>
                        <input  step=".01" required
                        type="number" 
                        name="husbandIncome" 
                        id="husbandIncome" 
                        class="form-control tourtipguide"
                        placeholder="$----.--"
                        data-ttg-title="Aquí debes ingresar la aportación económica del esposo al hogar"
                        data-ttg-fa="fa fa-money"
                        data-ttg-color="#069999">
                    </div>

                    <div class="form-group">
                        <label for="wifeIncome" class="label">Ingresos Esposa</label>
                        <input step=".01" required
                        type="number" 
                        name="wifeIncome" 
                        id="wifeIncome" 
                        class="form-control tourtipguide"
                        placeholder="$----.--"
                        data-ttg-title="Aquí debes ingresar la aportación económica de la esposa al hogar"
                        data-ttg-fa="fa fa-money"
                        data-ttg-color="#069999">
                    </div>

                    <div class="form-group">
                        <label for="businessIncome" class="label">Ingresos por Negocio</label>
                        <input step=".01" required
                        type="number" 
                        name="businessIncome" 
                        id="businessIncome" 
                        class="form-control tourtipguide"
                        placeholder="$----.--"
                        data-ttg-title="Aquí debes ingresar los ingresos que tengas por negocios del hogar"
                        data-ttg-fa="fa fa-money"
                        data-ttg-color="#069999">
                    </div>

                    <div class="form-group">
                        <label for="otherIncome" class="label">Otros Ingresos</label>
                        <input step=".01" 
                        type="number" 
                        name="otherIncome" 
                        id="otherIncome" 
                        class="form-control "
                        placeholder="$----.--">


                        <button type="button" data-toggle="modal" 
                        data-target="#exampleModal" 
                        class="btn btn-app tourtipguide"
                        data-ttg-title="Si tienes Otros Ingresos, click aquí para agregarlos"
                        data-ttg-fa="fa fa-money"
                        data-ttg-color="#069999"
                        >Agregar Otros Ingresos</button>

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th>Categoria</th>
                                            <th>Monto</th>
                                        </tr>
                                    </thead>
                                    <tbody id="other">
                                    </tbody>
        
                                    <tfoot>
                                        <tr>
                                            <td><b>Total Otros Ingresos</b></td>
                                            <td><b id="totalOtrosIngresos"></b></td>
                                        </tr>
                                    </tfoot>
                                </table>
                    
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="donations" class="label">Donaciones</label>
                        <input step=".01" required
                        type="number" 
                        name="donations" 
                        id="donations" 
                        class="form-control tourtipguide"
                        placeholder="$----.--"
                        data-ttg-title="¿Haces donaciones?"
                        data-ttg-content="Debes colocar el monto de ellas, recuerda que es mejor dar que recibir. Si no haces donaciones, ingresa 0."
                        data-ttg-fa="fa fa-money"
                        data-ttg-color="#069999">
                    </div>

                    <div class="form-group">
                        <button
                        class="tourtipguide btn btn-default btn-app"
                        type="button"
                        id="registrar"
                        data-ttg-title="¡Listo! Click en el botón para hacer el registro"
                        data-ttg-fa="fa fa-money"
                        data-ttg-color="#069999"
                        >Registrar Ingresos</button>
                    </div>
                </form>
            </div>
            

        </div>
        
    </div>

    <script>
    

    $(document).ready(function($) {

        var otros = [];

        $("#addOtros").click(addOtros);

        function addOtros(categoria, monto) {
            var cat=  $("#categoria").val();
            var mon=  $("#monto").val();

            otros.push({
                "categoria": cat,
                "monto": mon
            });
            

            $("#other").append(
            '<tr>'+
                    '<td>'+cat+'</td>'+
                    '<td>'+mon+'</td>'+
            '</tr>');
            
            $("#categoria").val("");
            $("#monto").val("");
            console.log(otros);
            
            var totalOtrosIngresos=0;

           otros.forEach(element => {
               totalOtrosIngresos+= parseFloat(element.monto)
           });
           console.log(totalOtrosIngresos);
           $("#totalOtrosIngresos").html("$"+parseFloat(totalOtrosIngresos));
           $("#otherIncome").val(parseFloat(totalOtrosIngresos));
        }

        $("#registrar").click(ingresar);

        function ingresar() {

                var husbandIncome= $("#husbandIncome").val();
                var wifeIncome= $("#wifeIncome").val();
                var businessIncome= $("#businessIncome").val();
                var otherIncome= $("#otherIncome").val();
                var donations= $("#donations").val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: "Post",
                    url: "{{Route('income.store')}}",
                    data: {
                        husbandIncome: husbandIncome,
                        wifeIncome: wifeIncome,
                        businessIncome: businessIncome,
                        otherIncome: otherIncome,
                        donations:donations,

                        otros : otros

                    }, 
                    success: function(params){
                        console.log(params);
                        window.location.href="/dwelling/create";
                    },
                    error: function (params) {
                        console.log(params);
                    }
                });
            }


        $.ttgTour({
            next: "SIG",
           prev: "PREV",
           finish: "FINAL" 
        });

    });

    </script>
@endsection