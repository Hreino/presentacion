<?php

namespace App\Http\Controllers;

use App\Income;
use App\Miscellaneous;
use App\Dwelling;
use App\TransportOrCars;
use App\Food;
use App\Savings;
use App\Debts;
use App\Entertainment;
use App\Clothing;
use App\Health;
use App\Insurances;
use App\Education;
use App\Expenses;
use App\Budget;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MiscellaneousController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('miscellaneous.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ID usuario en sesion
        $userID = auth()->user()->id;

        $miscellaneous= new Miscellaneous();
        $miscellaneous->id_user= $userID;
        $miscellaneous->newspaper=$request->input('newspaper');
        $miscellaneous->journals=$request->input('journals');
        $miscellaneous->subscriptionsOne=$request->input('subscriptionsOne');
        $miscellaneous->subscriptionTwo=$request->input('subscriptionTwo');
        $miscellaneous->makeup=$request->input('makeup');
        $miscellaneous->hairdressing=$request->input('hairdressing');
        $miscellaneous->laundry=$request->input('laundry');
        $miscellaneous->coffee=$request->input('coffee');
        $miscellaneous->feesToClubs=$request->input('feesToClubs');
        $miscellaneous->dialyMoney=$request->input('dialyMoney');
        $miscellaneous->birthdays=$request->input('birthdays');
        $miscellaneous->aniversaries=$request->input('aniversaries');
        $miscellaneous->christmas=$request->input('christmas');
        $miscellaneous->familySupport=$request->input('familySupport');
        $miscellaneous->other=$request->input('other');
        $miscellaneous->total=array_sum($request->all());
        $miscellaneous->save();


        //Ingresos
        $ingresos = Income::where('id_user', $userID)->orderBy('id', 'desc')->first();

        //Vivienda
        $vivienda = Dwelling::where('id_user', $userID)->orderBy('id', 'desc')->first();

        //transporte
        $transporte= TransportOrCars::where('id_user', $userID)->orderBy('id', 'desc')->first();

        //alimentacion
        $alimentacion =Food::where('id_user', $userID)->orderBy('id', 'desc')->first();

        //Ahorros
        $ahorros = Savings::where('id_user', $userID)->orderBy('id', 'desc')->first();

        //Deudas
        $deudas=Debts::where('id_user', $userID)->orderBy('id', 'desc')->first();

        //Entretenimiento
        $entretenimiento = Entertainment::where('id_user', $userID)->orderBy('id', 'desc')->first();

        //Ropa
        $ropa = Clothing::where('id_user', $userID)->orderBy('id', 'desc')->first();

        //Salud
        $salud = Health::where('id_user', $userID)->orderBy('id', 'desc')->first();

        //Seguros
        $seguros = Insurances::where('id_user', $userID)->orderBy('id', 'desc')->first();

        //Educacion
        $educacion= Education::where('id_user', $userID)->orderBy('id', 'desc')->first();

        //Otros
        $otros = Miscellaneous::where('id_user', $userID)->orderBy('id', 'desc')->first();

        //Generacion de Gastos
        $expenses = new Expenses();

        $expenses->id_user = $userID;
        $expenses->id_dwellings = $vivienda->id;
        $expenses->id_transport_or_cars = $transporte->id;
        $expenses->id_foods = $alimentacion->id;
        $expenses->id_savings = $ahorros->id;
        $expenses->id_debts = $deudas->id;
        $expenses->id_entertainments = $entretenimiento->id;
        $expenses->id_clothings = $ropa->id;
        $expenses->id_healths = $salud->id;
        $expenses->id_insurances = $seguros->id;
        $expenses->id_education = $educacion->id;
        $expenses->id_miscellaneouses = $otros->id;
        $expenses->total = ($vivienda->total + $transporte->total + $alimentacion->total + 
                            $ahorros->total  + $deudas->total + $entretenimiento->total +
                            $ropa->total + $salud->total + $seguros->total + $educacion->total
                            +$otros->total);

        $expenses->save();

        //Obteniendo el gasto que se acaba de generar

        $gastos = Expenses::where('id_user', $userID)->orderBy('id', 'desc')->first();

        //Generacion del Presupuesto
        $presupuesto = Budget::where('id_user', $userID)->orderBy('id', 'desc')->first();

        $presupuesto->update([
            'id_incomes'=>$ingresos->id,
            'id_expenses'=>$gastos->id,
            'resultado'=> ($ingresos->total-$gastos->total)
        ]);

        return redirect('budget');

        // return view('other.index', [
        //     'ingresos'=>$ingresos, 
        //     'vivienda'=>$vivienda, 
        //     'transporte'=>$transporte, 
        //     'alimentacion'=>$alimentacion,
        //     'ahorros'=>$ahorros,
        //     'deudas'=>$deudas,
        //     'entretenimiento'=>$entretenimiento, 
        //     'ropa'=>$ropa, 'salud'=>$salud, 
        //     'seguros'=>$seguros, 
        //     'educacion'=>$educacion, 
        //     'otros'=>$otros,

        //     'presupuesto'=>$presupuesto
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Miscellaneous  $miscellaneous
     * @return \Illuminate\Http\Response
     */
    public function show(Miscellaneous $miscellaneous)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Miscellaneous  $miscellaneous
     * @return \Illuminate\Http\Response
     */
    public function edit(Miscellaneous $miscellaneous)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Miscellaneous  $miscellaneous
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Miscellaneous $miscellaneous)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Miscellaneous  $miscellaneous
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miscellaneous $miscellaneous)
    {
        //
    }
}
