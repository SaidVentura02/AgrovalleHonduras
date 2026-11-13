<?php

namespace App\Http\Controllers;

use App\Models\Insumo;
use Illuminate\Http\Request;

class InsumoController extends Controller
{
    
    public function index()
    {
        $insumos = Insumo::latest()->paginate(15);
        return view('insumos.index', compact('insumo'));
    }

    
    public function create()
    {
        return view('insumos.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'sku' => 'required|unique:app/Models/Insumo,dni',
            'nombre' => 'required|max:255|string',
            'categoria' => 'required|max:255|string',
            'precio' => 'required|numeric|gt:0',
            'inventario' => 'required|integer|gte:0',
            'imagen' => 'string|nullable',
            'fabricante' => 'required|max:255|string',
            'fecha_vencimiento' => 'date',
            'fecha_registro' => 'date',
            'lote' => 'required|string'
        ]);

        Insumo::create($request->all());

        return redirect()->route('insumos.index')->with('success', 'El producto ha sido agregado exitosamente.');
    }

    
    public function show(Insumo $insumo)
    {
        return redirect()->route('insumos.edit', $insumo);
    }

    
    public function edit(Insumo $insumo)
    {
        return view('insumos.edit', compact('insumo'));
    }

    
    public function update(Request $request, Insumo $insumo)
    {
        $request->validate([
            'sku' => 'required|unique:app/Models/Insumo,dni',
            'nombre' => 'required|max:255|string',
            'categoria' => 'required|max:255|string',
            'precio' => 'required|numeric|gt:0',
            'inventario' => 'required|integer|gte:0',
            'imagen' => 'string|nullable',
            'fabricante' => 'required|max:255|string',
            'fecha_vencimiento' => 'date',
            'fecha_registro' => 'date',
            'lote' => 'required|string'
        ]);

        $insumo->update($request->all());

        return redirect()->route('insumos.index')->with('success', 'El producto se ha actualizado exitosamente.');
    }

    
    public function destroy(Insumo $insumo)
    {
        $insumo->delete();
        return redirect()->route('insumos.index')->with('success', 'Se ha retirado el producto del inventario.');
    }
}
