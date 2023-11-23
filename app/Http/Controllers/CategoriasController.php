<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //Crear constructor solo cuando pase por autentificación
    }

    public function index()
    {
        $categorias = Categoria::paginate(5);
        return view('categorias.index', ['categorias'=>$categorias]);
    }

    /**
     * Show the form for creating a new resource.
     * Mandar a llamar a una vista desde otra
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|min:5|max:100'
        ]);

        $categoria = Categoria::create([
            'descripcion' => $request->descripcion
        ]);

        session()->flash('status', 'Se guardó la categoría '.$request->descripcion.' correctamente.');

        return to_route('CategoriasIndex'); //Llamamos la ruta para que la web vuelva a llamar al controlador de index y se vuelva a paginar con el nuevo registro
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
        $categoria = Categoria::find($id);
        return view('categorias.edit', ['categoria'=>$categoria]); //Retornar hacia productos edit para enviar los datos y enviamos arreglo de productos
    }

    /**
     * Update the specified resource in storage.
     * Actualizar un recurso especifuci en el almacenamiento DB
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'descripcion' => 'required|min:5|max:100'
        ]);
        $categoria = Categoria::find($id);

        if($categoria) //Asignar valores a objeto con la información que viaja para posteriormente guardarla
        {
            $categoria->descripcion = $request->input('descripcion');
        }
        $categoria->save();

        session()->flash('status', 'Se actualizó la categoría '.$request->descripcion.' correctamente.');

        return to_route('CategoriasIndex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::find($id);

        if($categoria) 
        {
            $categoria->delete();   
        }

        session()->flash('status', 'Se eliminó la categoría orrectamente.');

        return to_route('CategoriasIndex');
    }
}
