<?php

namespace App\Http\Controllers;

use App\Savings;
use Illuminate\Http\Request;

class SavingsController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('savings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $savings = new Savings();
        $savings->id_user=auth()->user()->id;
        $savings->savingOne=$request->input('savingOne');
        $savings->savingTwo=$request->input('savingTwo');
        $savings->investmentPlan=$request->input('investmentPlan');
        $savings->total=array_sum($request->all());
        $savings->save();

        return redirect('debts/create');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Savings  $savings
     * @return \Illuminate\Http\Response
     */
    public function show(Savings $savings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Savings  $savings
     * @return \Illuminate\Http\Response
     */
    public function edit(Savings $savings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Savings  $savings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Savings $savings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Savings  $savings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Savings $savings)
    {
        //
    }
}
