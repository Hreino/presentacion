<?php

namespace App\Http\Controllers;

use App\Debts;
use Illuminate\Http\Request;

class DebtsController extends Controller
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
        return view('debts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $debts = new Debts();
        $debts->id_user=auth()->user()->id;
        $debts->creditCardOne=$request->input('creditCardOne');
        $debts->creditCardTwo=$request->input('creditCardTwo');
        $debts->creditCardThree=$request->input('creditCardThree');
        $debts->creditCardFour=$request->input('creditCardFour');
        $debts->loanOne=$request->input('loanOne');
        $debts->loanTwo=$request->input('loanTwo');
        $debts->loanThree=$request->input('loanThree');
        $debts->loanFour=$request->input('loanFour');
        $debts->other=$request->input('other');
        $debts->total=array_sum($request->all());
        $debts->save();

        return redirect('entertainment/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Debts  $debts
     * @return \Illuminate\Http\Response
     */
    public function show(Debts $debts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Debts  $debts
     * @return \Illuminate\Http\Response
     */
    public function edit(Debts $debts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Debts  $debts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Debts $debts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Debts  $debts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Debts $debts)
    {
        //
    }
}
