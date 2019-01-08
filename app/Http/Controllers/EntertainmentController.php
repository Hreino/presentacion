<?php

namespace App\Http\Controllers;

use App\Entertainment;
use Illuminate\Http\Request;

class EntertainmentController extends Controller
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
        return view('entertainment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entertainment= new Entertainment();
        $entertainment->id_user=auth()->user()->id;
        $entertainment->travels=$request->input('travels');
        $entertainment->restaurants=$request->input('restaurants');
        $entertainment->vacations=$request->input('vacations');
        $entertainment->other=$request->input('other');
        $entertainment->total=array_sum($request->all());
        $entertainment->save();

        return redirect('clothing/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function show(Entertainment $entertainment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function edit(Entertainment $entertainment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entertainment $entertainment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entertainment $entertainment)
    {
        //
    }
}
