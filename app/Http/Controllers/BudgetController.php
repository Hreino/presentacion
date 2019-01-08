<?php

namespace App\Http\Controllers;

use App\Budget;
use App\Income;
use App\Expenses;
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
use App\Miscellaneous;
use Illuminate\Http\Request;
use App\Mail\Notification;
use Illuminate\Support\Facades\Mail;
use App\IncomeDetail;

class BudgetController extends Controller
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
        $userID = auth()->user()->id;
        $userBudgets = Budget::where([['id_user', '=',  $userID],['id_expenses', '<>', 'NULL'], ['id_incomes', '<>', 'NULL']])->get();
        return view('budget.index', ['userBudgets'=>$userBudgets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('budget.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $budget = new Budget();

        $budget->id_user = auth()->user()->id;
        $budget->mes= $request->input('mes');
        $budget->coaching= $request->input('coaching');

        $budget->save();
        // if ($budget->coaching=='Si') {
        //     $mensaje = new Notification('Prueba');
        //     Mail::to('hereinosa@gmail.com')->send($mensaje);
        // }
        return redirect('income/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function show(Budget $budget)
    {
        //Obteniendo el Presupuesto
        $presupuesto = Budget::where('id', $budget->id)->first();


        //Obteniendo los Ingresos
        $ingresos= Income::where('id',$budget->id_incomes)->first();

        //Obteniendo el detalle de los Ingresos
        $incomeDetail = IncomeDetail::where('income_id', $ingresos->id)->get();

        //Obteniendo los egresos
        $egresos=Expenses::where('id', $budget->id_expenses)->first();

        //Obteniendo Gastos de Vivienda
        $vivienda=Dwelling::where('id', $egresos->id_dwellings)->first();

        //Obteniendo gastos de transporte
        $transporte = TransportOrCars::where('id', $egresos->id_transport_or_cars)->first();

        //Obteniendo gastos de alimentacion
        $alimentacion = Food::where('id', $egresos->id_foods)->first();

        //Obteniendo ahorros
        $ahorros = Savings::where('id', $egresos->id_savings)->first();

        //Obteniendo gastos de Deudas
        $deudas = Debts::where('id', $egresos->id_debts)->first();

        //Obteniendo los gastos de Entretenimiento
        $entretenimiento = Entertainment::where('id', $egresos->id_entertainments)->first();

        //Obteniendo gastos de Ropa
        $ropa = Clothing::where('id', $egresos->id_clothings)->first();

        //Obteniendo los gastos de salud
        $salud = Health::where('id', $egresos->id_healths)->first();

        //Obteniendo los gastos de seguros
        $seguros = Insurances::where('id', $egresos->id_insurances)->first();

        //Obteniendo los gastos de educacion
        $educacion = Education::where('id', $egresos->id_education)->first();

        //Obteniendo los gastos Varios

        $otros = Miscellaneous::where('id', $egresos->id_miscellaneouses)->first();


        $porcentajes = [
            "Vivienda"=>0.30,
            "Transporte"=>0.15,
            "Alimentación"=>0.15,
            "Ahorros"=>0.05,
            "Deudas"=>0.10,
            "Ocio"=>0.04,
            "Vestimenta"=>0.04,
            "Salud"=>0.04,
            "Seguros"=>0.04,
            "Educación"=>0.05,
            "Gastos Varios"=>0.04,
            "Total"=>1
        ];

        $porcVivienda = round(($vivienda->total/$ingresos->total)*100,2);
        $porcTransporte = round(($transporte->total/$ingresos->total)*100,2);
        $porcAlimentación = round(($alimentacion->total/$ingresos->total)*100,2);
        $porcAhorros = round(($ahorros->total/$ingresos->total)*100,2);
        $porcDeudas = round(($deudas->total/$ingresos->total)*100,2);
        $porcEntretenimiento = round(($entretenimiento->total/$ingresos->total)*100,2);
        $porcVestimenta = round(($ropa->total/$ingresos->total)*100,2);
        $porcSalud = round(($salud->total/$ingresos->total)*100,2);
        $porcSeguros = round(($seguros->total/$ingresos->total)*100,2);
        $porcEducacion = round(($educacion->total/$ingresos->total)*100,2);
        $porcOtros = round(($otros->total/$ingresos->total)*100,2);
        $totalGastado = ($porcVivienda+$porcTransporte+$porcAlimentación+$porcAhorros+$porcDeudas+$porcEntretenimiento
                            +$porcVestimenta+$porcSalud+$porcSeguros+$porcEducacion+$porcOtros);


        $actuales = [
            $porcVivienda, $porcTransporte, $porcAlimentación,
            $porcAhorros, $porcDeudas, $porcEntretenimiento,
            $porcVestimenta, $porcSalud, $porcSeguros, $porcEducacion,
            $porcOtros, $totalGastado

        ];

        return view('budget.show', [
            'presupuesto'=>$presupuesto, 'ingresos'=>$ingresos,
            'incomeDetail'=>$incomeDetail, 
            'vivienda'=>$vivienda, 'transporte'=>$transporte,
            'alimentacion'=>$alimentacion, 'ahorros'=>$ahorros,
            'deudas'=>$deudas, 'entretenimiento'=>$entretenimiento,
            'ropa'=>$ropa, 'salud'=>$salud,'seguros'=>$seguros,
            'educacion'=>$educacion, 'otros'=>$otros,
            'porcentajes'=>$porcentajes, 'actuales'=>$actuales
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function edit(Budget $budget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Budget $budget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function destroy(Budget $budget)
    {
        //
    }

    public function coaching(){

        $coachBudgets = Budget::where([['coaching', '=',  'Si'],['id_expenses', '<>', 'NULL'], ['id_incomes', '<>', 'NULL']])->get();

        return view('budget.coaching', ['coachBudgets'=>$coachBudgets]);
    }
}
