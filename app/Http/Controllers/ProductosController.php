<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth'); //Crear constructor solo cuando pase por autentificación
    }

    public function index()
    {
        $productos = Producto::with('categoria:id,descripcion')->paginate(5);
        return view('productos.index', ['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     * Mandar a llamar a una vista desde otra
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', ['categorias'=>$categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|min:5|max:100',
            'precio' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,webp,svg',
            'categoria' => 'required | exists:categorias,id'
        ]);
        $nombreImagen = null;

        if($request->hasFile('imagen'))
        {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->storeAs('public/images', $nombreImagen);
        }

        $producto = Producto::create([
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'imagen' => $nombreImagen,
            'categoria_id' =>$request->categoria
        ]);

        session()->flash('status', 'Se guardó el producto '.$request->descripcion.' correctamente.');

        return to_route('ProductosIndex'); //Llamamos la ruta para que la web vuelva a llamar al controlador de index y se vuelva a paginar con el nuevo registro
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
     * Mostrar formulario para editar el recurso especificado
     */
    public function edit(string $id)
    {
        $producto = Producto::find($id);
        $categorias = Categoria::all();
        return view('productos.edit', ['producto'=>$producto], ['categorias'=>$categorias]); //Retornar hacia productos edit para enviar los datos y enviamos arreglo de productos
    }

    /**
     * Update the specified resource in storage.
     * Actualizar un recurso especifuci en el almacenamiento DB
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'descripcion' => 'required|min:5|max:100',
            'precio' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,webp,svg',
            'categoria' => ['required', 'exists:categorias,id']
        ]);
        $producto = Producto::find($id);

        if($producto) //Asignar valores a objeto con la información que viaja para posteriormente guardarla
        {
            $producto->descripcion = $request->input('descripcion');
            $producto->precio = $request->input('precio');
            //$producto->imagen = $request->input('imagen');
            $producto->categoria_id = $request->input('categoria');

            if($request->hasFile('imagen'))
            {
                if($producto->imagen)
                {
                    Storage::delete('public/images/' . $producto->imagen);
                }
                $imagen = $request->file('imagen');
                $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
                $imagen->storeAs('public/images', $nombreImagen);

                $producto->imagen = $nombreImagen;
            }
        }
        $producto->save();

        session()->flash('status', 'Se actualizó el producto '.$request->descripcion.' correctamente.');

        return to_route('ProductosIndex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::find($id);

        if($producto) 
        {
            $producto->delete();   
        }

        session()->flash('status', 'Se eliminó el producto correctamente.');

        return to_route('ProductosIndex');
    }
}
