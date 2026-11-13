<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    
    public function index()
    {
        $empleados = Empleado::latest()->paginate(15);
        return view('empleados.index', compact('empleados'));
    }

    
    public function create()
    {
        return view('empleados.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required|size:13|unique:app/Models/Empleado,dni',
            'nombre' => 'required|max:255|string',
            'apellido' => 'required|max:255|string',
            'correo' => 'max:255|string',
            'cargo' => 'required|max:255|string',
            'salario' => 'required|numeric|gt:0',
            'fecha_ingreso' => 'date',
            'estado' => 'required|string'
        ]);

        Empleado::create($request->all());

        return redirect()->route('empleados.index')->with('success', 'El empleado ha sido agregado exitosamente.');
    }

    
    public function show(Empleado $empleado)
    {
        return redirect()->route('empleados.edit', $empleado);
    }

    
    public function edit(Empleado $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'dni' => 'required|size:13|unique:app/Models/Empleado,dni',
            'nombre' => 'required|max:255|string',
            'apellido' => 'required|max:255|string',
            'correo' => 'max:255|string',
            'cargo' => 'required|max:255|string',
            'salario' => 'required|numeric|gt:0',
            'fecha_ingreso' => 'date',
            'estado' => 'required|string'
        ]);

        $empleado->update($request->all());

        return redirect()->route('empleados.index')->with('success', 'El empleado se ha actualizado exitosamente.');
    }

    
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index')->with('success', 'Se ha retirado al empleado del sistema.');
    }
}
