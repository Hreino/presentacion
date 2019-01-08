<?php

namespace App\Http\Controllers;

use App\Health;
use Illuminate\Http\Request;

class HealthController extends Controller
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
        return view('health.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $health= new Health();
        $health->id_user=auth()->user()->id;
        $health->doctors=$request->input('doctors');
        $health->dentist=$request->input('dentist');
        $health->meds=$request->input('meds');
        $health->other=$request->input('other');
        $health->total=array_sum($request->all());
        $health->save();


        return redirect('insurances/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Health  $health
     * @return \Illuminate\Http\Response
     */
    public function show(Health $health)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Health  $health
     * @return \Illuminate\Http\Response
     */
    public function edit(Health $health)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Health  $health
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Health $health)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Health  $health
     * @return \Illuminate\Http\Response
     */
    public function destroy(Health $health)
    {
        //
    }
}
