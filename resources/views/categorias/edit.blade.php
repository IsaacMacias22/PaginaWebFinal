@extends('layouts.app')

@section('container')
    <h1 class="text-center">Nueva Categoría</h1>
    <div class="container w-75">
        <form action="{{route('CategoriasUpdate', $categoria->id)}}" method="POST">
            @csrf @method('PATCH')
            <div class="form-group">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{old('descripcion', $categoria->descripcion)}}">
                @error('descripcion')
                    <div style="color:red">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group mt-2">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{route('CategoriasIndex')}}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
@endsection