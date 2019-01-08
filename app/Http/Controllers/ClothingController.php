<?php

namespace App\Http\Controllers;

use App\Clothing;
use Illuminate\Http\Request;

class ClothingController extends Controller
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
        return view('clothing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clothing=new Clothing();
        $clothing->id_user=auth()->user()->id;
        $clothing->clothes=$request->input('clothes');
        $clothing->shoes=$request->input('shoes');
        $clothing->kidsClothing=$request->input('kidsClothing');
        $clothing->total=array_sum($request->all());
        $clothing->save();

        return redirect('health/create');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clothing  $clothing
     * @return \Illuminate\Http\Response
     */
    public function show(Clothing $clothing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clothing  $clothing
     * @return \Illuminate\Http\Response
     */
    public function edit(Clothing $clothing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clothing  $clothing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clothing $clothing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clothing  $clothing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clothing $clothing)
    {
        //
    }
}
