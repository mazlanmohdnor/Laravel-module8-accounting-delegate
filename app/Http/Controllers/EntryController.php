<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

class EntryController extends Controller
{
    public function index()
    {
        //show page
        $entries = Entry::orderBy('id', 'DESC')->get();
        return view('module8.fast-entry', compact('entries'));
    }
    public function store(Request $request)
    {
        // validate input

        //save
        $entries = Entry::create($request->all());
        $entries->save();
        return back();
    }

     public function show($id)
    {
        $entrie = Entry::findOrFail($id);
        return $entrie;
        return view('module8.show', compact('expense'));  
    }

     public function update(Request $request, $id)
    {
        $entrie = Entry::findOrFail($id);
        $entrie->update($request->all());
    }

     public function destroy($id)
    {
        $entrie = Entry::findOrFail($id);
        $entrie->delete();
    }
}
