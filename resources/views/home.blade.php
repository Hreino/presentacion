@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-md-7" id="mainHome" >
                

                <h3 class="text-center"><i> "El dinero no es un fin en sí mismo, sino un medio que nos permite alcanzar nuestros objetivos de vida."</i></h3>
                <article class="col-md-6 animated pulse " id="articleHome" >
                    <img src="{{ asset('img/articleHome.png') }}" 
                    id="imgArticleHome" 
                    title="Proyecto Juntos">
                </article>
                
            </section>
            <aside  class="col-md-5" id="asideHome">
               <div class="container ">
                   <div class="row">
                       <div class="col-md-12 text-center">
                            <h4 class="label "><i> <b>¿Qué son las finanzas personales <i class="fa fa-money animated bounceIn"> </i> ?</b></i></h4>
                            <h5>
                                "Las finanzas personales son la gestión financiera que requiere un individuo
                                o unidad familiar para presupuestar, ahorrar y gastar sus recursos monetarios
                                a través del tiempo, teniendo en cuenta los riesgos financieros y los acontecimientos 
                                futuros de su vida."
                            </h5>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4 class="label "><b><i>El ingreso familiar es... <i class="fa fa-calculator animated bounceIn"> </i></i></b></h4>
                            <h5>
                                "Es la totalidad de los ganancias o ingresos que tiene una familia. 
                                Al hablar de totalidad se incluye el salario, los ingresos extraordinarios e incluso las 
                                ganancias que se obtienen en forma de especie."
                            </h5>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4 class="label "><b><i>El gasto familiar es... <i class="fa fa-calculator animated bounceIn"> </i></i></b></h4>
                            <h5>
                                "Es una salida de dinero que una familia debe pagar para acreditar su derecho 
                                sobre un artículo o a recibir un servicio."
                            </h5>
                        </div>
                    </div> 
               </div>
            </aside>
            
            
        </div>

    </div>
@endsection
