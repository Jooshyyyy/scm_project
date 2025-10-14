<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        $roles= Role::all();
        return view ('roles.index', compact('roles'));
    }

    public function create()
    {
      return view('roles.create');
    }


    public function store(Request $request)
    {
        $request->validate(['name'=>'required|unique:roles']);
        Role::create($request->all());
        return redirect()->route('roles.index')->with('success','Rol creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}
