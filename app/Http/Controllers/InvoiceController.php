<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('invoice.index', [
            'invoices' => Invoice::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('invoice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputData = $request->all();

        Invoice::create([
            'invoice_no' => $inputData['invoice_no'],
            'description' => $inputData['description'],

            'amount_net' => $inputData['amount_net'],
            'tax' => $inputData['tax'],

            'amount_gross' =>
            $inputData['amount_net'] + $inputData['amount_net'] * $inputData['tax'] / 100,
        ]);

        return redirect('/invoices');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('invoice.edit', [
            'invoice' => Invoice::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $inputData = $request->all();

        Invoice::find($id)
            ->update([
                'invoice_no' => $inputData['invoice_no'],
                'description' => $inputData['description'],

                'amount_net' => $inputData['amount_net'],
                'tax' => $inputData['tax'],

                'amount_gross' =>
                $inputData['amount_net'] + $inputData['amount_net'] * $inputData['tax'] / 100,
            ]);

        return redirect('/invoices');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
