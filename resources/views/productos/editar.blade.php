@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center m-5">
        <div class="card p-5">
            <h1>Editar producto</h1><br>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/guardarEdicion" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$producto->id}}" name="id" id="id">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                    <input type="text" class="form-control" value="{{ $producto->nombre }}" name="nombre"
                        required><br><br>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Descripción</span>
                    <input type="text" class="form-control" value="{{ $producto->descripcion }}" name="descripcion"
                        required><br><br>
                </div>
                Imagen actual:
                <img style="height: 50px; width: auto" src="data:image/png;base64,{{ base64_encode($producto->imagen) }}"
                    alt="{{ $producto->nombre }}" class="card-img-top">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Imagen nueva:</label>
                    <input class="form-control" type="file" id="imagen" name="imagen">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Precio unitario</span>
                    <input type="text" class="form-control" value="{{ $producto->precio_unitario }}"
                        name="precio_unitario" step="0.01" required><br><br>
                </div>
                <label for="categoria">Categoría:</label>
                <select class="form-select" name="categoria" required>
                    @if ($producto->categoria == 'comida')
                        <option value="comida" selected>Comida</option>
                    @else
                        <option value="comida">Comida</option>
                    @endif
                    @if ($producto->categoria == 'bebida')
                        <option value="bebida" selected>Bebida</option>
                    @else
                        <option value="bebida">Bebida</option>
                    @endif
                    @if ($producto->categoria == 'postre')
                        <option value="postre" selected>Postre</option>
                    @else
                        <option value="postre">Postre</option>
                    @endif


                </select><br><br>

                <input class="btn btn-outline-primary w-100" type="submit" value="Editar">
            </form>
        </div>
    </div>

@endsection
