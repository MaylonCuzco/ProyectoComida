{{-- <!DOCTYPE html>
<html>
<head>
    <title>Laravel Example</title>
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: -20px;
        }

        .col-md-3 {
            width: calc(25% - 40px);
            padding: 20px;
        }

        .card {
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            width: 100%;
            height: 350px; /* Ajusta la altura deseada */
            margin-bottom: 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-body {
            padding: 20px;
        }

        .card-img-top {
            width: 100%;
            height: 200px; /* Ajusta la altura deseada */
            object-fit: cover;
            border-radius: 0.25rem 0.25rem 0 0;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .card-price {
            font-size: 16px;
            font-weight: bold;
            color: #007bff;
        }

        h2 {
            position: relative;
            display: inline-block;
            font-size: 24px;
            margin-bottom: 20px;
        }

        h2::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 30%;
            height: 2px;
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Comida</h2>
        <br>
        <br>
        <br>
        <div class="row">
            @php
                $comidaChunks = $comida->chunk(4);
            @endphp

            @foreach ($comidaChunks as $chunk)
            <div class="col-md-3">
                <div class="row">
                    @foreach ($chunk as $producto)
                    <div class="col-md-12">
                        <div class="card">
                            <img src="data:image/png;base64,{{ base64_encode($producto->imagen) }}" alt="{{ $producto->nombre }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $producto->nombre }}</h5>
                                <p class="card-price">${{ $producto->precio_unitario }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        <h2>Bebida</h2>
        <br>
        <br>
        <br>
        <div class="row">
            @php
                $bebidaChunks = $bebida->chunk(4);
            @endphp

            @foreach ($bebidaChunks as $chunk)
            <div class="col-md-3">
                <div class="row">
                    @foreach ($chunk as $producto)
                    <div class="col-md-12">
                        <div class="card">
                            <img src="data:image/png;base64,{{ base64_encode($producto->imagen) }}" alt="{{ $producto->nombre }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $producto->nombre }}</h5>
                                <p class="card-price">${{ $producto->precio_unitario }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <h2>Postre</h2>
        <br>
        <br>
        <br>
        <div class="row">
            @php
                $postreChunks = $postre->chunk(4);
            @endphp

            @foreach ($postreChunks as $chunk)
            <div class="col-md-3">
                <div class="row">
                    @foreach ($chunk as $producto)
                    <div class="col-md-12">
                        <div class="card">
                            <img src="data:image/png;base64,{{ base64_encode($producto->imagen) }}" alt="{{ $producto->nombre }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $producto->nombre }}</h5>
                                <p class="card-price">${{ $producto->precio_unitario }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
    

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
 --}}

@extends('layouts.app')

@section('content')
    <h1>Administración de productos</h1>
    <a href="productos/crear" class="btn btn-outline-primary">Agregar producto</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Imagen</th>
                <th scope="col">Precio Unitario</th>
                <th scope="col">Categoria</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($productos as $producto)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>
                        <img style="height: 50px; width: auto" src="data:image/png;base64,{{ base64_encode($producto->imagen) }}"
                            alt="{{ $producto->nombre }}" class="card-img-top">
                    </td>
                    <td>{{ $producto->precio_unitario }}</td>
                    <td>{{ $producto->categoria }}</td>

                    <td>
                        <a href="editarProduto/{{$producto->id}}" type="button" class="btn btn-outline-secondary">Editar</a>
                        <a href="eliminar/{{$producto->id}}" type="button" class="btn btn-outline-danger">Eliminar</a>
                    </td>
            @endforeach
            </tr>
        </tbody>
    </table>
@endsection
