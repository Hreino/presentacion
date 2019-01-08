<?php

namespace App\Http\Controllers;

use App\Income;
use Illuminate\Http\Request;
use App\IncomeDetail;

class IncomeController extends Controller
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
        // return view('income.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('income.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $income = new Income();

        $income->husbandIncome=$request -> input('husbandIncome');
        $income->wifeIncome=$request -> input('wifeIncome');
        $income->businessIncome=$request -> input('businessIncome');
        $income->otherIncome=$request -> input('otherIncome');
        $income->donations=$request -> input('donations');
        $income->id_user = auth()->user()->id;

        $income->total = ($request->input('husbandIncome')+$request -> input('wifeIncome')+$request -> input('businessIncome')+$request -> input('otherIncome')-$request -> input('donations'));

        $income->save();
        $details = [];
        $details = $request->input('otros');

        foreach ($details as $item ) {
            IncomeDetail::create([
                'income_id'=>$income->id,
                'subcategory'=>$item['categoria'],
                'amount'=>$item['monto']
            ]);
        }

        return ($details);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit(Income $income)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Income $income)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(Income $income)
    {
        //
    }
}
