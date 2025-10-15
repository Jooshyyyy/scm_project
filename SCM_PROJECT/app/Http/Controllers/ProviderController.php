<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{

    public function index()
    {
        $providers= Provider::all();
        return view('providers.index',compact('providers'));
    }


    public function create()
    {
        return view('providers.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|unique:providers.name',
        ]);

        Provider::create($request->all());
        return redirect()->route('providers.index')->with('success','Proveedor creado exitosamente');
    }


    public function show(Provider $provider)
    {

    }


    public function edit(Provider $provider)
    {
        return view('providers.edit',compact('provider'));
    }

    public function update(Request $request, Provider $provider)
    {
        $request->validate([
            'name'=>'required|unique:providers,name,'. $provider->id,
        ]);
        $provider->update($request->all());
        return redirect()->route('providers.index')->with('success','Proveedor actualizado correctamente');
    }


    public function destroy(Provider $provider)
    {
        $provider->delete();
        return redirect()->route('providers.index')->with('success','Proveedor eliminado correctamente');
    }
}
