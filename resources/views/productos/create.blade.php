@extends('layouts.app')

@section('content')



    <div class="d-flex justify-content-center m-5">
        <div class="card p-5">
            <h1>Crear producto</h1><br>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('productos.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                    <input type="text" class="form-control" name="nombre" required><br><br>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Descripción</span>
                    <input type="text" class="form-control" name="descripcion" required><br><br>
                </div>
             
                <div class="mb-3">
                    <label for="formFile" class="form-label">Imagen:</label>
                    <input class="form-control" type="file" id="imagen" name="imagen">
                  </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Precio unitario</span>
                    <input type="text" class="form-control" name="precio_unitario" step="0.01" required><br><br>
                </div>


                <label for="categoria">Categoría:</label>
                <select class="form-select" name="categoria" required>
                    
                    <option value="comida">Comida</option>
                    <option value="bebida">Bebida</option>
                    <option value="postre">Postre</option>
                </select><br><br>

                <input class="btn btn-outline-primary w-100" type="submit" value="Agregar">
            </form>
        </div>
    </div>

@endsection
