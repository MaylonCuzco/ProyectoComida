<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function registroForm()
    {
        return view('registro');
    }

    public function registro(Request $request)
    {
        // Validar los datos del formulario de registro
        $request->validate([
            'nombre' => 'required|alpha',
            'cedula' => 'required|digits:10',
            'apellido' => 'required|alpha',
            'direccion' => 'required',
            'ciudad' => 'required|alpha',
            'fecha_nacimiento' => 'required|date',
            'correo' => 'required|email',
            'contrasena' => 'required',
        ]);

        // Crear un nuevo cliente en la base de datos
        $cliente = new Cliente();
        $cliente->nombre = $request->input('nombre');
        $cliente->cedula = $request->input('cedula');
        $cliente->apellido = $request->input('apellido');
        $cliente->direccion = $request->input('direccion');
        $cliente->ciudad = $request->input('ciudad');
        $cliente->fecha_nacimiento = $request->input('fecha_nacimiento');
        $cliente->correo = $request->input('correo');
        $cliente->contrasena = bcrypt($request->input('contrasena'));
        $cliente->save();

        // Redireccionar a una página de éxito o mostrar un mensaje de éxito
        return redirect('/exito');
    }
}
