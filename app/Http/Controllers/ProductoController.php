<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function administracion()
    {
        $productos = Producto::get();
        return view('productos.administrative', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
     
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required|image|mimes:png',
            'precio_unitario' => 'required|numeric',
            'categoria' => 'required|in:comida,bebida,postre',
        ]);
    
        $imagen = $request->file('imagen');
        $imagenExtension = $imagen->getClientOriginalExtension();
    
        if ($imagenExtension != 'png') {
            return redirect()->back()->with('error', 'Solo se permiten imágenes PNG.');
        }
    
        $imagenBinaria = file_get_contents($imagen->getRealPath());
    
    
        Producto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'imagen' => $imagenBinaria,
            'precio_unitario' => $request->precio_unitario,
            'categoria' => $request->categoria
        ]);
        return redirect('/productosAdmin');
     /*    $comida = Producto::where('categoria', 'comida')->get();
        $bebida = Producto::where('categoria', 'bebida')->get();
        $postre = Producto::where('categoria', 'postre')->get();
    
        return view('productos.index', compact('comida', 'bebida', 'postre'))->with('success', 'Producto registrado exitosamente'); */
    }

    public function index()
    {
        $comidas = Producto::where('categoria', 'comida')->get();
        $bebidas = Producto::where('categoria', 'bebida')->get();
        $postres = Producto::where('categoria', 'postre')->get();
    
        return view('productos.index', compact('comidas', 'bebidas', 'postres'));
    }
    public function editarProducto($id)
    {
        $producto = Producto::where('id', $id)->first();
        return view('productos.editar', compact('producto'));
    }
    public function guardarEdicion(Request $request)
    {
        
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio_unitario' => 'required|numeric',
            'categoria' => 'required|in:comida,bebida,postre',
        ]);
        $producto = Producto::where('id', $request->id)->first();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenExtension = $imagen->getClientOriginalExtension();
            $imagenBinaria = file_get_contents($imagen->getRealPath());
            $producto->imagen = $imagenBinaria;
        }
        $producto->precio_unitario = $request->precio_unitario;
        $producto->categoria = $request->categoria;
        $producto->save();
        return redirect('/productosAdmin');
    }


    public function eliminar($id)
    {
        $producto = Producto::where('id', $id)->first();
        $producto->delete();
        return redirect('/productosAdmin');
    }
}
