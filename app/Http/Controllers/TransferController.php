<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transfer;
use App\Account;

class TransferController extends Controller
{
   public function index()
    {
        //show page
        $transfers = Transfer::orderBy('id', 'DESC')->get();
        $accounts = Account::all();
        return view('module8.account-transfer', compact('transfers', 'accounts'));
    }
    public function store(Request $request)
    {
        // validate input

        //save
        $transfers = Transfer::create($request->all());
        $transfers->save();
        return back();
    }

     public function show($id)
    {
        $transfer = Transfer::findOrFail($id);
        return $expense;
        return view('module8.show', compact('transfer'));  
    }

     public function update(Request $request, $id)
    {
        $transfer = Transfer::findOrFail($id);
        $transfer->update($request->all());
    }

     public function destroy($id)
    {
        $transfer = Transfer::findOrFail($id);
        $transfer->delete();
    }
}
