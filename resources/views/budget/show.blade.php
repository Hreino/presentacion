@extends('layouts.app')

@section('content')
    

    <div class="container">
        {{-- Encabezado --}}
        
        <h1 class="label text-center">Presupuesto de {{$presupuesto->mes}}</h1>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover table-stripped table-bordered ">
                    <thead>
                        <tr>
                            <th colspan="2" class=" label text-center">Detalles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="1"><b>Nombre</b></td>
                            @if (auth()->user()->name != $presupuesto->user->name)
                            <td>{{$presupuesto->user->name}}</td>
                            @else
                            <td>{{auth()->user()->name}}</td>
                            @endif
                            
                        </tr>
                        <tr>
                            <td><b>Mes</b></td>
                            <td>{{$presupuesto->mes}}</td>
                        </tr>
                        <tr>
                            <td><b>Coaching</b></td>
                            <td>{{$presupuesto->coaching}}</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-stripped table-bordered">
                    <tbody class="text-center">
                        <tr class="bg-app">
                            <th >Categorías</th>
                            @foreach ($porcentajes as $item=>$value)
                            <th>{{$item}}</th>
                            @endforeach
                        </tr>
                        <tr>
                            <th class="bg-app">Porcentaje Sugerido</th>
                            @foreach ($porcentajes as $item)
                            <td>{{$item*100}}%</td>
                            @endforeach
                        </tr>
                        <tr >
                            <th class="bg-app">Porcentaje Actual</th>
                            @foreach ($actuales as $item)
                                <td>{{$item}}%</td>
                            @endforeach
                        </tr>
                       
                    </tbody>
                </table>
            </div>
                
        
        </div>

        
        {{-- Encabezado --}}


        {{-- Modal --}}

        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>Subcategoría</th>
                                <th>Monto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incomeDetail as $item)
                                <tr>
                                    <td>{{$item->subcategory}}</td>
                                    <td class="text-right">${{$item->amount}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Modal --}}

        {{-- Detalle Ingresos --}}

        <table class="table table-hover table-stripped table-bordered ">
            <thead>
                <tr>
                    <th colspan="2" class="label text-center">Ingresos</th>
                </tr>
                <tr class="text-center">
                    <th colspan="1">Detalle</th>
                    <th colspan="1">Monto</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="text-right"><b>Ingresos {{auth()->user()->name}}</b></td>
                    <td class="text-right"><b>${{$ingresos->husbandIncome}}</b></td>
                </tr>
                <tr>
                    <td class="text-right"><b>Ingresos Esposa</b></td>
                    <td class="text-right"><b>${{$ingresos->wifeIncome}}</b></td>
                </tr>
                <tr>
                    <td class="text-right"><b>Ingresos Negocio</b></td>
                    <td class="text-right"><b>${{$ingresos->businessIncome}}</b></td>
                </tr>
                <tr>
                    <td class="text-right"><b>Otros Ingresos</b> 

                        <button class="btn-app btn-md" title="Ver detalles de otros Ingresos"
                        data-toggle="modal" data-target=".bd-example-modal-sm"
                        >
                            <span><i class="fa fa-list" aria-hidden="true"></i></span>
                        </button>
                    </td>
                    <td class="text-right"><b>${{$ingresos->otherIncome}}</b></td>
                </tr>
                <tr>
                    <td class="text-right label"><b>Total Ingresos</b></td>
                    <td class="text-right"><b>${{($ingresos->total + $ingresos->donations), 2}}</b></td>
                </tr>
                <tr>
                    <td class="text-right"><b>Donaciones</b></td>
                    <td class="text-right"><b>${{$ingresos->donations}}</b></td>
                </tr>
                <tr>
                    <td class="text-right label"><b>Dinero Disponible</b></td>
                    <td class="text-right"><b>${{$ingresos->total}}</b></td>
                </tr>
            </tbody>
        </table>

        {{-- Detalle Ingresos --}}


        {{-- Detalle Egresos --}}

        <table class="table table-hover table-bordered table-stripped">
            <thead>
                <tr>
                    <th colspan="3" class="label text-center">Egresos</th>
                </tr>
                <tr class="text-center">
                    <th>Categoría</th>
                    <th>Sub-categoría</th>
                    <th>Monto</th>
                </tr>
            </thead>

            <tbody>
                {{-- Gastos Vivienda --}}
                <tr>
                    <td rowspan="12" class="text-center" style="padding-top:25%;">Vivienda</td>
                    <td class="text-right">Renta</td>
                    <td class="text-right">${{$vivienda->rent}}</td>
                </tr>
                <tr class="text-right">
                    <td>Hipoteca</td>
                    <td>${{$vivienda->mortgage}}</td>
                </tr>
                <tr class="text-right">
                    <td>Seguro de Vivienda</td>
                    <td>${{$vivienda->insurance}}</td>
                </tr>
                <tr class="text-right">
                    <td>Pago de Electricidad</td>
                    <td>${{$vivienda->electricity}}</td>
                </tr>
                <tr class="text-right">
                    <td>Gas Propano</td>
                    <td>${{$vivienda->propaneGas}}</td>
                </tr>
                <tr class="text-right">
                    <td>Teléfono</td>
                    <td>${{$vivienda->phone}}</td>
                </tr>
                <tr class="text-right">
                    <td>Agua Potable</td>
                    <td>${{$vivienda->drinkingWater}}</td>
                </tr>
                <tr class="text-right">
                    <td>Mantenimiento de Vivienda</td>
                    <td>${{$vivienda->maintainance}}</td>
                </tr>
                <tr class="text-right">
                    <td>Televisión por cable o satelital</td>
                    <td>${{$vivienda->cableTV}}</td>
                </tr>
                <tr class="text-right">
                    <td>Internet</td>
                    <td>${{$vivienda->internet}}</td>
                </tr>
                <tr class="text-right">
                    <td>Proyectos</td>
                    <td>${{$vivienda->projects}}</td>
                </tr>
                <tr class="text-right label">
                    <td>Total Gastos Vivienda</td>
                    <td>${{$vivienda->total}}</td>
                </tr>
                {{-- Gastos Vivienda --}}

                {{-- Gastos de Transporte --}}
                <tr>
                    <td rowspan="8" class="text-center" style="padding-top:12%;">Transporte o Autmóviles</td>
                    <td class="text-right">Cuotas Mensuales Autos</td>
                    <td class="text-right">${{$transporte->monthlyPayments}}</td>
                </tr>
                <tr class="text-right">
                    <td>Combustible</td>
                    <td>${{$transporte->fuel}}</td>
                </tr>
                <tr class="text-right">
                    <td>Seguro de Autos</td>
                    <td>${{$transporte->carInsurance}}</td>
                </tr>
                <tr class="text-right">
                    <td>Mantenimiento de Autos</td>
                    <td>${{$transporte->maintainance}}</td>
                </tr>
                <tr class="text-right">
                    <td>Transporte Público</td>
                    <td>${{$transporte->publicTransport}}</td>
                </tr>
                <tr class="text-right">
                    <td>Gastos por uso de taxi</td>
                    <td>${{$transporte->taxi}}</td>
                </tr>
                <tr class="text-right">
                    <td>Otros gastos de Transporte <small>(Incluye Boletos de Autobús)</small></td>
                    <td>${{$transporte->other}}</td>
                </tr>
                <tr class="text-right label">
                    <td >Total Gastos Transporte o Automóviles </small></td>
                    <td>${{$transporte->total}}</td>
                </tr>
                {{-- Gastos de Transporte --}}

                {{-- Gastos de  Alimentacion--}}
                <tr>
                    <td rowspan="4" class="text-center" style="padding-top:7.5%;">Alimentación</td>
                    <td class="text-right">Supermercado</td>
                    <td class="text-right">${{$alimentacion->superMarket}}</td>
                </tr>
                <tr class="text-right">
                    <td>Mercado</td>
                    <td>${{$alimentacion->market}}</td>
                </tr>
                <tr class="text-right">
                    <td>Otros gastos de Alimentación</td>
                    <td>${{$alimentacion->other}}</td>
                </tr>
                <tr class="text-right label">
                    <td>Total Gastos de Alimentación</td>
                    <td>${{$alimentacion->total}}</td>
                </tr>
                {{-- Gastos de  Alimentacion--}}

                {{-- Ahorros --}}
                <tr >
                    <td rowspan="4" class="text-center" style="padding-top:7.5%;">Ahorros</td>
                    <td class="text-right">Ahorro 1</td>
                    <td class="text-right">${{$ahorros->savingOne}}</td>
                </tr>
                <tr class="text-right">
                    <td>Ahorro 2</td>
                    <td>${{$ahorros->savingTwo}}</td>
                </tr>
                <tr class="text-right">
                    <td>Plan de Inversión</td>
                    <td>${{$ahorros->investmentPlan}}</td>
                </tr>
                <tr class="label text-right">
                    <td>Total Ahorros</td>
                    <td>${{$ahorros->total}}</td>
                </tr>
                {{-- Ahorros --}}

                {{-- Pago de deudas --}}
                <tr>
                    <td rowspan="10" class="text-center" style="padding-top:20%;">Pago de Deudas</td>
                    <td class="text-right">Tarjeta de credito 1</td>
                    <td class="text-right">${{$deudas->creditCardOne}}</td>
                </tr>
                <tr class="text-right">
                    <td>Tarjeta de Credito 2</td>
                    <td>${{$deudas->creditCardTwo}}</td>
                </tr>

                <tr class="text-right">
                    <td>Tarjeta de Credito 3</td>
                    <td>${{$deudas->creditCardThree}}</td>
                </tr>
                <tr class="text-right">
                    <td>Tarjeta de Credito 4</td>
                    <td>${{$deudas->creditCardFour}}</td>
                </tr>
                <tr class="text-right">
                    <td>Prestamo 1</td>
                    <td>${{$deudas->loanOne}}</td>
                </tr>
                <tr class="text-right">
                    <td>Prestamo 2</td>
                    <td>${{$deudas->loanTwo}}</td>
                </tr>
                <tr class="text-right">
                    <td>Prestamo 3</td>
                    <td>${{$deudas->loanThree}}</td>
                </tr>
                <tr class="text-right">
                    <td>Prestamo 4</td>
                    <td>${{$deudas->loanFour}}</td>
                </tr>
                <tr class="text-right">
                    <td>Otras Deudas</td>
                    <td>${{$deudas->other}}</td>
                </tr>
                <tr class="text-right label">
                    <td>Total Deudas</td>
                    <td>${{$deudas->total}}</td>
                </tr>
                {{-- Pago de deudas --}}

                {{-- Entretenimiento --}}
                <tr>
                    <td rowspan="5" class="text-center" style="padding-top:7.5%">Entretenimiento</td>
                    <td class="text-right">Salidas de Paseo</td>
                    <td class="text-right">${{$entretenimiento->travels}}</td>
                </tr>
                <tr class="text-right">
                    <td>Salidas a restaurantes</td>
                    <td>${{$entretenimiento->restaurants}}</td>
                </tr>
                <tr class="text-right">
                    <td>Monto mensual por Vacaciones</td>
                    <td>${{$entretenimiento->vacations}}</td>
                </tr>
                <tr class="text-right">
                    <td>Otros gastos de entretenimiento</td>
                    <td>${{$entretenimiento->other}}</td>
                </tr>
                <tr class="text-right label">
                    <td>Total gastos Entretenimiento </td>
                    <td>${{$entretenimiento->total}}</td>
                </tr>
                {{-- Entretenimiento --}}

                {{-- Gastos Ropa --}}
                <tr>
                    <td rowspan="4" class="text-center" style="padding-top:7%;">Vestuario</td>
                    <td class="text-right">Ropa</td>
                    <td class="text-right">${{$ropa->clothes}}</td>
                </tr>
                <tr class="text-right">
                    <td>Zapatos</td>
                    <td>${{$ropa->shoes}}</td>
                </tr>
                <tr class="text-right">
                    <td>Ropa para Niños</td>
                    <td>${{$ropa->kidsClothing}}</td>
                </tr>
                <tr class="text-right label">
                    <td>Total Gastos Vestuario</td>
                    <td>${{$ropa->total}}</td>
                </tr>
                {{-- Gastos Ropa --}}

                {{-- Gastos Salud --}}

                <tr>
                    <td rowspan="5" class="text-center" style="padding-top:10%;">Salud</td>
                    <td class="text-right">Consultas médicas</td>
                    <td class="text-right">${{$salud->doctors}}</td>
                </tr>
                <tr class="text-right">
                    <td>Odontólogos</td>
                    <td>${{$salud->dentist}}</td>
                </tr>
                <tr class="text-right">
                    <td>Compras de medicina</td>
                    <td>${{$salud->meds}}</td>
                </tr>
                <tr class="text-right">
                    <td>Otros gastos en salud</td>
                    <td>${{$salud->other}}</td>
                </tr>
                <tr class="text-right label">
                    <td>Total Gastos Salud</td>
                    <td>${{$salud->total}}</td>
                </tr>
                {{-- Gastos Salud --}}

                {{-- Gastos Seguros --}}
                <tr>
                    <td rowspan="4" class="text-center" style="padding-top:6%;">Seguros</td>
                    <td class="text-right">Seguros de Vida</td>
                    <td class="text-right">${{$seguros->lifeInsurance}}</td>
                </tr>
                <tr class="text-right">
                    <td>Seguro de Salud</td>
                    <td>${{$seguros->healthInsurance}}</td>
                </tr>
                <tr class="text-right">
                    <td>Otros seguros</td>
                    <td>${{$seguros->other}}</td>
                </tr>
                <tr class="text-right label">
                    <td>Total Seguros</td>
                    <td>${{$seguros->total}}</td>
                </tr>
                {{-- Gastos Seguros --}}

                {{-- Educación --}}

                <tr>
                    <td rowspan="5" class="text-center" style="padding-top:6%;">Educación</td>
                    <td class="text-right">Mensualidades Universidad</td>
                    <td class="text-right">${{$educacion->college}}</td>
                </tr>
                <tr class="text-right">
                    <td>Mensualidad Colegio</td>
                    <td>${{$educacion->school}}</td>
                </tr>
                <tr class="text-right">
                    <td>Matrículas <small>(colegios y universidad)</small></td>
                    <td>${{$educacion->enrollment}}</td>
                </tr>
                <tr class="text-right">
                    <td>Libros</td>
                    <td>${{$educacion->books}}</td>
                </tr>
                <tr class="text-right label">
                    <td>Total Educación</td>
                    <td>${{$educacion->total}}</td>
                </tr>

                {{-- Educación --}}

                {{-- Gastos Varios --}}
                <tr>
                    <td rowspan="16" class="text-center" style="padding-top:30%;">Gastos Varios</td>
                    <td class="text-right">Compra de Periódicos</td>
                    <td class="text-right">${{$otros->newspaper}}</td>
                </tr>
                <tr class="text-right">
                    <td>Compra de Revistas</td>
                    <td>${{$otros->journals}}</td>
                </tr>
                <tr class="text-right">
                    <td>Suscripciones 1</td>
                    <td>${{$otros->subscriptionsOne}}</td>
                </tr>
                <tr class="text-right">
                    <td>Suscripciones 2</td>
                    <td>${{$otros->subscriptionTwo}}</td>
                </tr>
                <tr class="text-right">
                    <td>Maquillaje</td>
                    <td>${{$otros->makeup}}</td>
                </tr>
                <tr class="text-right">
                    <td>Peluquería</td>
                    <td>${{$otros->hairdressing}}</td>
                </tr>
                <tr class="text-right">
                    <td>Lavandería</td>
                    <td>${{$otros->laundry}}</td>
                </tr>
                <tr class="text-right">
                    <td>Cafés Ocasionales</td>
                    <td>${{$otros->coffee}}</td>
                </tr>
                <tr class="text-right">
                    <td>Membresías a clubs</td>
                    <td>${{$otros->feesToClubs}}</td>
                </tr>
                <tr class="text-right">
                    <td>Monto mensual por dinero Diario</td>
                    <td>${{$otros->dialyMoney}}</td>
                </tr>
                <tr class="text-right">
                    <td>Cumpleaños</td>
                    <td>${{$otros->birthdays}}</td>
                </tr>
                <tr class="text-right">
                    <td>Aniversarios</td>
                    <td>${{$otros->aniversaries}}</td>
                </tr>
                <tr class="text-right">
                    <td>Navidad</td>
                    <td>${{$otros->christmas}}</td>
                </tr>
                <tr class="text-right">
                    <td>Apoyo a Familiares</td>
                    <td>${{$otros->familySupport}}</td>
                </tr>
                <tr class="text-right">
                    <td>Otros gastos Varios</td>
                    <td>${{$otros->other}}</td>
                </tr>
                <tr class="text-right label">
                    <td>Total Gastos Varios</td>
                    <td>${{$otros->total}}</td>
                </tr>
                {{-- Gastos Varios --}}

                {{-- Resultado del presupuesto mensual --}}
                <tr class="label text-right">
                    <th colspan="2">Dinero Disponible al final del Mes</th>
                    @if ($presupuesto->resultado>0)
                        <th>${{$presupuesto->resultado}}</th>
                    @else
                        <th class="text-danger">${{$presupuesto->resultado}}</</th>
                    @endif
                    
                </tr>
                {{-- Resultado del presupuesto mensual --}}
            </tbody>
        </table>
        {{-- Detalle Egresos --}}

    </div>
@endsection

{{-- {{$presupuesto}}
    {{$ingresos}}
    {{$transporte}}
    {{$alimentacion}}
    {{$ahorros}}
    {{$deudas}}
    {{$entretenimiento}}
    {{$ropa}}
    {{$salud}}
    {{$seguros}}
    {{$educacion}}
    {{$otros}} --}}