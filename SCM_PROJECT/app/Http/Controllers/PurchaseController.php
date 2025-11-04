<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Provider;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{

    public function index()
    {
        $purchases=Purchase::with('provider')->get();
        return view('purchases.index',compact('purchases'));
    }

    public function create()
    {
        $providers=Provider::all();
        return view('purchases.create',compact('providers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'provider_id'=> 'required|exists:providers,id',
            'puchase_date'=> 'required|date',
            'total'=> 'required|numeric|min:0',
            'status'=> 'required|string'
        ]);
    }

    public function show(Purchase $purchase)
    {
        return view('purchases.show',compact('purchase'));
    }

    public function edit(Purchase $purchase)
    {
        $providers=Provider::all();
        return view('purchases,edit',compact('purchases','providers'));
    }

    public function update(Request $request, Purchase $purchase)
    {
        $request->validate([
            'provider_id'=> 'required|exists:providers,id',
            'puchase_date'=> 'required|date',
            'total'=> 'required|numeric|min:0',
            'status'=> 'required|string'
        ]);
        $purchase->update($request->all());
        return redirect()->route('purchases.index')->with('success','Compra actualizada correctamente');
    }

    public function destroy(Purchase $purchase)
    {
        $purchase->delete();
        return redirect()->route('purchases.index')->with('success','Compra borrada exitosamente');
    }
}
