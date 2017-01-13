<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use App\Account;

class ExpenseController extends Controller
{
	public function index()
    {
        //show page
        $expenses = Expense::orderBy('id', 'DESC')->get();
        $accounts = Account::all();
        return view('module8.expense', compact('expenses', 'accounts'));
    }
    public function store(Request $request)
    {
        // validate input

        //save
        $expenses = Expense::create($request->all());
        $expenses->save();
        return back();
    }

     public function show($id)
    {
        $expense = Expense::findOrFail($id);
        return $expense;
        return view('module8.show', compact('expense'));  
    }

     public function update(Request $request, $id)
    {
        $expense = Expense::findOrFail($id);
        $expense->update($request->all());
    }

     public function destroy($id)
    {
        $expense = Expense::findOrFail($id);
        $expense->delete();
    }
}
