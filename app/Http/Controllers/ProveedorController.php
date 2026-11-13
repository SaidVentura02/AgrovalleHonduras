<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    
    public function index()
    {
        $proveedores = Proveedor::latest()->paginate(15);
        return view('proveedors.index', compact('proveedores'));
    }

    
    public function create()
    {
        return view('proveedors.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'rtn' => 'required|size:14|unique:app/Models/Proveedor,dni',
            'empresa' => 'required|max:255|string',
            'contacto'=> 'required|max:255|string',
            'telefono' => 'required|size:8|regex:/[2389]\d{7}',
            'categoria' => 'required|string',
            'limite_credito' => 'required|numeric|gte:0',
            'dias_credito' => 'required|integer|min:0',
            'fecha_registro' => 'date',
            'estado' => 'required|string'
        ]);

        Proveedor::create($request->all());

        return redirect()->route('proveedors.index')->with('success', 'El proveedor ha sido agregado exitosamente.');
    }

    
    public function show(Proveedor $proveedor)
    {
        return redirect()->route('proveedors.edit', $proveedor);
    }

    
    public function edit(Proveedor $proveedor)
    {
        return view('proveedors.edit', compact('proveedor'));
    }

    
    public function update(Request $request, Proveedor $proveedor)
    {
        $request->validate([
            'rtn' => 'required|size:14|unique:app/Models/Proveedor,dni',
            'empresa' => 'required|max:255|string',
            'contacto'=> 'required|max:255|string',
            'telefono' => 'required|size:8|regex:/[2389]\d{7}',
            'categoria' => 'required|string',
            'limite_credito' => 'required|numeric|gte:0',
            'dias_credito' => 'required|integer|min:0',
            'fecha_registro' => 'date',
            'estado' => 'required|string'
        ]);

        $proveedor->update($request->all());

        return redirect()->route('proveedors.index')->with('success', 'El proveedor se ha actualizado exitosamente.');
    }

    
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedors.index')->with('success', 'Se ha retirado al proveedor del sistema.');
    }
}
