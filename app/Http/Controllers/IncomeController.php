<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Income;
use App\Account;

class IncomeController extends Controller
{
    public function index()
    {
        //show page
        $incomes = Income::orderBy('id', 'DESC')->get();
        $accounts = Account::all();
        // return $accounts;
        return view('module8.income', compact('incomes','accounts'));
    }

    public function create()
    {
        //show form
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate input

        //save
        $income = Income::create($request->all());
        $income->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $income = Income::findOrFail($id);
        return $income;
        return view('module8.show', compact('income'));  
    }

    /**
     * Show the form for editing the specified resource.
    */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $income = Income::findOrFail($id);
        $income->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $income = Income::findOrFail($id);
        $income->delete();
    }
}
