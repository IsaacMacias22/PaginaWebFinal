@extends('layouts.app')

@section('container')
    <h1 class="text-center">Nuevo Producto</h1>
    <div class="container w-75">
        <form action="{{route('ProductosStore')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{old('descripcion')}}">
                @error('descripcion')
                    <div style="color:red">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control" value="{{old('precio')}}">
                @error('precio')
                    <div style="color:red">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" name="imagen" id="imagen" class="form-control">
                @error('imagen')
                    <div style="color:red">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="categoria" class="form-label">Categoría</label>
                <select name="categoria" class="form-select">
                    @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->descripcion}}</option>
                    @endforeach
                </select>
                @error('categoria')
                    <div style="color:red">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group mt-2">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{route('ProductosIndex')}}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
@endsection