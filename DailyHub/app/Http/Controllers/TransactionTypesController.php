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
        $activeTypes = TransactionTypes::where('active', TRUE)->orderBy('name', 'asc')->get();
        $desactiveTypes = TransactionTypes::where('active', FALSE)->orderBy('name', 'asc')->get();

        return view('transtype.index', compact(['activeTypes', 'desactiveTypes']));
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
    public function edit(TransactionTypes $type)
    {
        return view('transtype.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TransactionTypes $type)
    {
        $type->name = $request->input('name');

        $type->update();

        return redirect(route('transtype.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransactionTypes $type)
    {
        $type->delete();

        return redirect(route('transtype.index'));
    }

    /**
     * Desactivate a type, can't be used in form
     */
    public function desactivate(Request $request, TransactionTypes $type)
    {
        $type->active = 0;

        $type->save();

        return redirect(route('transtype.index'));
    }

    /**
     * Activate a type, can be used in form
     */
    public function activate(Request $request, TransactionTypes $type)
    {
        $type->active = 1;

        $type->save();

        return redirect(route('transtype.index'));
    }
}
