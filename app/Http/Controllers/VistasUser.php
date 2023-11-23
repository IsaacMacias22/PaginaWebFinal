<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
class VistasUser extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //Crear constructor solo cuando pase por autentificación
    }
    public function inicio_index()
    {
        return view('views_user.index');
    }
    public function nosotros_index()
    {
        return view('views_user.nosotros');
    }
    public function productos_index()
    {
        $productos = DB::select('SELECT categorias.descripcion as categoria, productos.descripcion, productos.precio, productos.imagen FROM productos, categorias
        WHERE productos.categoria_id = categorias.id ORDER BY categoria;');
        return view('views_user.productos', ['productos'=>$productos]);
    }
    public function contacto_index(){
        return view('views_user.contacto');
    }
}
