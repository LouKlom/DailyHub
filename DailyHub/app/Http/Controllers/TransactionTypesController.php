<?php

namespace App\Http\Controllers;

use App\Models\TransactionTypes;
use Illuminate\Http\Request;

class TransactionTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = TransactionTypes::all();

        return view('transtype.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transtype.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $type = new TransactionTypes();

        $type->name = $request->input('name');
        $type->active = TRUE;

        $type->save();

        return redirect(route('transtype.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(TransactionTypes $transactionTypes)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TransactionTypes $transactionTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TransactionTypes $transactionTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransactionTypes $transactionTypes)
    {
        //
    }
}
