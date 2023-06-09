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
    <style>
        .smt-317 {
            scroll-margin-top: 317px;
        }

        .modal-backdrop {
            z-index: 104100;
        }
    </style>
    <div class="position-sticky sticky-top  w-100 bg-white" style="z-index: 100010; top: 131px;">
        <section class="bg-light text-white text-center py-4">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <button onclick="scrollToSection('section1')" class="btn">
                        <img src="https://images.getduna.com/4b7d38ba-f349-480d-955a-6fe3fcfb063d/8a6dbb44230e49de_67D5CEDA-47A0-EA11-80EE-000D3A019254_744x744.png?d=100x100&format=webp"
                            class="rounded-circle" alt="...">
                        <br> Comidas</button>
                    <button onclick="scrollToSection('section2')" class="btn "><img
                            src="https://images.getduna.com/4b7d38ba-f349-480d-955a-6fe3fcfb063d/8a6dbb44230e49de_67D5CEDA-47A0-EA11-80EE-000D3A019254_744x744.png?d=100x100&format=webp"
                            class="rounded-circle" alt="...">
                        <br> Bebidas</button>
                    <button onclick="scrollToSection('section3')" class="btn "><img
                            src="https://images.getduna.com/4b7d38ba-f349-480d-955a-6fe3fcfb063d/8a6dbb44230e49de_67D5CEDA-47A0-EA11-80EE-000D3A019254_744x744.png?d=100x100&format=webp"
                            class="rounded-circle" alt="...">
                        <br> Postres</button>

                </div>
            </div>
        </section>
    </div>

    <section id="section1" class="mb-4 smt-317">
        <hr> <!-- Línea de separación -->
        <h2>Comidas</h2>
        <hr>
        <div class="row">
            @foreach ($comidas as $comida)
                <div class="col-md-3 carta" data-bs-toggle="modal" data-bs-target="#exampleModal_{{ $comida->id }}">


                    <div class="card">
                        <img style="height: 200px; width: 100%"
                            src="data:image/png;base64,{{ base64_encode($comida->imagen) }}" alt="{{ $comida->nombre }}"
                            class="card-img-top">

                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $comida->nombre }}</h5>
                            $ {{ $comida->precio_unitario }}
                        </div>
                        <button class="btn btn-success">Agregar</button>
                    </div>
                </div>
                <div style="z-index: 100000000000;" class="modal fade" id="exampleModal_{{ $comida->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $comida->nombre }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-6">
                                        <img style="height: 200px; width: 100%"
                                            src="data:image/png;base64,{{ base64_encode($comida->imagen) }}"
                                            alt="{{ $comida->nombre }}" class="card-img-top">
                                    </div>
                                    <div class="col-6">
                                        ${{ $comida->precio_unitario }} <br>
                                        DISPONIBILIDAD: EN STOCK
                                        <br>
                                        <b>DESCRIPCIÓN</b>
                                        <P>{{ $comida->descripcion }}</P>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                               <input type="text">
                                <button type="button" class="btn btn-success">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </section>

    <!--SECCION 2------------------- -->

    <section id="section2" class="mb-4 smt-317">
        <hr> <!-- Línea de separación -->
        <h2>Bebidas</h2>
        <hr>
        <div class="row">
            @foreach ($bebidas as $bebida)
                <div class="col-md-3 carta" data-bs-toggle="modal" data-bs-target="#exampleModal_{{ $bebida->id }}">


                    <div class="card">
                        <img style="height: 200px; width: 100%"
                            src="data:image/png;base64,{{ base64_encode($bebida->imagen) }}" alt="{{ $bebida->nombre }}"
                            class="card-img-top">

                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $bebida->nombre }}</h5>
                            $ {{ $bebida->precio_unitario }}
                        </div>
                        <button class="btn btn-success">Agregar</button>
                    </div>
                </div>
                <div style="z-index: 100000000000;" class="modal fade" id="exampleModal_{{ $bebida->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $bebida->nombre }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-6">
                                        <img style="height: 200px; width: 100%"
                                            src="data:image/png;base64,{{ base64_encode($bebida->imagen) }}"
                                            alt="{{ $bebida->nombre }}" class="card-img-top">
                                    </div>
                                    <div class="col-6">
                                        ${{ $bebida->precio_unitario }} <br>
                                        DISPONIBILIDAD: EN STOCK
                                        <br>
                                        <b>DESCRIPCIÓN</b>
                                        <P>{{ $bebida->descripcion }}</P>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                               <input type="text">
                                <button type="button" class="btn btn-success">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </section>

    <!--SECCION 3------------------- -->

    <section id="section3" class="mb-4 smt-317">
        <hr> <!-- Línea de separación -->
        <h2>Postres</h2>
        <hr>
        <div class="row">
            @foreach ($postres as $postre)
                <div class="col-md-3 carta" data-bs-toggle="modal" data-bs-target="#exampleModal_{{ $postre->id }}">


                    <div class="card">
                        <img style="height: 200px; width: 100%"
                            src="data:image/png;base64,{{ base64_encode($postre->imagen) }}" alt="{{ $postre->nombre }}"
                            class="card-img-top">

                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $postre->nombre }}</h5>
                            $ {{ $postre->precio_unitario }}
                        </div>
                        <button class="btn btn-success">Agregar</button>
                    </div>
                </div>
                <div style="z-index: 100000000000;" class="modal fade" id="exampleModal_{{ $postre->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $postre->nombre }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-6">
                                        <img style="height: 200px; width: 100%"
                                            src="data:image/png;base64,{{ base64_encode($postre->imagen) }}"
                                            alt="{{ $postre->nombre }}" class="card-img-top">
                                    </div>
                                    <div class="col-6">
                                        ${{ $postre->precio_unitario }} <br>
                                        DISPONIBILIDAD: EN STOCK
                                        <br>
                                        <b>DESCRIPCIÓN</b>
                                        <P>{{ $postre->descripcion }}</P>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                               <input type="text">
                                <button type="button" class="btn btn-success">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>


    <script>
        // Lógica para el carrito de compras
        var cartItems = 0;

        // Obtener el botón del carrito
        var cartButton = document.getElementById('cartButton');

        // Obtener los botones de "Agregar al carrito"
        var addToCartButtons = document.getElementsByClassName('addToCartButton');

        // Agregar un listener a cada botón de "Agregar al carrito"
        for (var i = 0; i < addToCartButtons.length; i++) {
            addToCartButtons[i].addEventListener('click', function() {
                cartItems++; // Incrementar el número de elementos en el carrito
                cartButton.innerText = 'Carrito (' + cartItems + ')'; // Actualizar el texto del botón del carrito
            });
        }

        function scrollToSection(sectionId) {
            var element = document.getElementById(sectionId);
            element.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });

        }
    </script>
@endsection
