<?php

namespace App\Http\Controllers;

use App\Insurances;
use Illuminate\Http\Request;

class InsurancesController extends Controller
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
        return view('insurances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insurances= new Insurances();
        $insurances->id_user=auth()->user()->id;
        $insurances->lifeInsurance=$request->input('lifeInsurance');
        $insurances->healthInsurance=$request->input('healthInsurance');
        $insurances->other=$request->input('other');
        $insurances->total=array_sum($request->all());
        $insurances->save();

        return redirect('education/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Insurances  $insurances
     * @return \Illuminate\Http\Response
     */
    public function show(Insurances $insurances)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Insurances  $insurances
     * @return \Illuminate\Http\Response
     */
    public function edit(Insurances $insurances)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Insurances  $insurances
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insurances $insurances)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Insurances  $insurances
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insurances $insurances)
    {
        //
    }
}
