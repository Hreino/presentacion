<?php

namespace App\Http\Controllers;

use App\TransportOrCars;
use Illuminate\Http\Request;

class TransportOrCarsController extends Controller
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
        return view('transport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transportOrCars = new TransportOrCars();

        $transportOrCars->id_user = auth()->user()->id;
        $transportOrCars->monthlyPayments = $request->input('monthlyPayments');
        $transportOrCars->fuel= $request->input('fuel');
        $transportOrCars->carInsurance= $request->input('carInsurance');
        $transportOrCars->maintainance= $request->input('maintainance');
        $transportOrCars->publicTransport= $request->input('publicTransport');
        $transportOrCars->taxi= $request->input('taxi');
        $transportOrCars->other= $request->input('other');

        $transportOrCars->total = array_sum($request->all());

        $transportOrCars->save();

        return redirect('food/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TransportOrCars  $transportOrCars
     * @return \Illuminate\Http\Response
     */
    public function show(TransportOrCars $transportOrCars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TransportOrCars  $transportOrCars
     * @return \Illuminate\Http\Response
     */
    public function edit(TransportOrCars $transportOrCars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TransportOrCars  $transportOrCars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransportOrCars $transportOrCars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TransportOrCars  $transportOrCars
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransportOrCars $transportOrCars)
    {
        //
    }
}
