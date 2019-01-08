<?php

namespace App\Http\Controllers;

use App\Dwelling;
use Illuminate\Http\Request;

class DwellingController extends Controller
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
        return view('dwelling.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dwelling = new Dwelling();

        $dwelling->id_user = auth()->user()->id;
        $dwelling->rent = $request->input('rent');
        $dwelling->mortgage = $request->input('mortgage');
        $dwelling->insurance = $request->input('insurance');
        $dwelling->electricity = $request->input('electricity');
        $dwelling->propaneGas = $request->input('propaneGas');
        $dwelling->phone = $request->input('phone');
        $dwelling->drinkingWater = $request->input('drinkingWater');
        $dwelling->maintainance = $request->input('maintainance');
        $dwelling->cableTV = $request->input('cableTV');
        $dwelling->internet = $request->input('internet');
        $dwelling->projects = $request->input('projects');
        $dwelling->other = $request->input('other');

        $dwelling->total= array_sum($request->all());

        $dwelling->save();

        return redirect('transport/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dwelling  $dwelling
     * @return \Illuminate\Http\Response
     */
    public function show(Dwelling $dwelling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dwelling  $dwelling
     * @return \Illuminate\Http\Response
     */
    public function edit(Dwelling $dwelling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dwelling  $dwelling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dwelling $dwelling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dwelling  $dwelling
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dwelling $dwelling)
    {
        //
    }
}
