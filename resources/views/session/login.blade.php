@extends('layouts.app')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');



        h1 {
            font-weight: bold;
            margin: 0;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button {
            border-radius: 20px;
            border: 1px solid #0b89d2;
            background-color: #0b89d2;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .contein {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }

        .form-contein {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-contein {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .contein.right-panel-active .sign-in-contein {
            transform: translateX(100%);
        }

        .sign-up-contein {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .contein.right-panel-active .sign-up-contein {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-contein {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .contein.right-panel-active .overlay-contein {
            transform: translateX(-100%);
        }

        .overlay {
            background: #00759c;
            background: -webkit-linear-gradient(to right, #0b89d2, #00759c);
            background: linear-gradient(to right, #0b89d2, #00759c);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .contein.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .contein.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .contein.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-contein {
            margin: 20px 0;
        }

        .social-contein a {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }
    </style>
    <div class="d-flex justify-content-center m-5 p-5">

        <div class="contein" id="contein">
            <div class="form-contein sign-up-contein">
                <form method="post" action="{{ url('registrarse') }}">
                    @csrf
                    <h1>Crear una cuenta</h1>
                    <div class="social-contein">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>o use su correo electrónico para registrarse</span>
                    <input type="text"  id="name_register" name="name_register" placeholder="Nombre" />
                    @if ($errors->has('name_register'))
                        <li>{{ $errors->first('name_register') }}</li>
                    @endif
                    <input type="email" id="email_register" name="email_register" placeholder="Correo electronico" />
                    @if ($errors->has('email_register'))
                    <li>{{ $errors->first('email_register') }}</li>
                @endif
                    <input type="password"  id="password_register" name="password_register" placeholder="Contraseña" />
                    @if ($errors->has('password_register'))
                    <li>{{ $errors->first('password_register') }}</li>
                @endif
                    <button>Registrarse</button>
                </form>
            </div>
            <div class="form-contein sign-in-contein">
                <form method="post" action="/iniciarSesion">
                    @csrf
                    <h1>Iniciar Sesión</h1>
                    <div class="social-contein">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>o usa tu cuenta</span>
                    <input type="email"  name="email" id="email" placeholder="Correo electrónico" />
                    @if ($errors->has('email'))
                        <li>{{ $errors->first('email') }}</li>
                    @endif
                    <input type="password"  name="password" id="password" placeholder="Contraseña" />
                    @if ($errors->has('password'))
                        <li>{{ $errors->first('password') }}</li>
                    @endif
                    <a href="#">¿Olvidaste tu contraseña?</a>
                    <button>Iniciar Sesión</button>
                </form>
            </div>
            <div class="overlay-contein">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>¡Bienvenido de nuevo!</h1>
                        <p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
                        <button class="ghost" id="signIn">Iniciar Sesión</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hola amigo</h1>
                        <p>Ingresa tus datos personales y comienza tu viaje con nosotros</p>
                        <button class="ghost" id="signUp">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const contein = document.getElementById('contein');

        signUpButton.addEventListener('click', () => {
            contein.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            contein.classList.remove("right-panel-active");
        });
    </script>
@endsection
