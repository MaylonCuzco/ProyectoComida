<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
 
    <style>
        /* styles.css */
        
body {
    background-color: #f5f5f5;
  }
  
  .container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  
  h1 {
    color: #3490dc;
  }
  
  label {
    display: block;
    margin-bottom: 10px;
    color: #555;
  }
  
  input[type="text"],
  input[type="email"],
  input[type="password"],
  textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
  }
  
  input[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    background-color: #3490dc;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .input-error {
    color: red;
  }
  
        </style>
</head>
<body>
    <div class="container">
        <h1>Formulario de Registro</h1>

        <form method="POST" action="/registro">
            @csrf

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>
            @error('nombre')
                <div class="error">{{ $message }}</div>
            @enderror
            <br><br>

            <label for="cedula">Cédula:</label>
            <input type="text" name="cedula" required>
            @error('cedula')
                <div class="error">{{ $message }}</div>
            @enderror
            <br><br>

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" required>
            @error('apellido')
                <div class="error">{{ $message }}</div>
            @enderror
            <br><br>

            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" required>
            @error('direccion')
                <div class="error">{{ $message }}</div>
            @enderror
            <br><br>

            <label for="ciudad">Ciudad:</label>
            <input type="text" name="ciudad" required>
            @error('ciudad')
                <div class="error">{{ $message }}</div>
            @enderror
            <br><br>

            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" required>
            @error('fecha_nacimiento')
                <div class="error">{{ $message }}</div>
            @enderror
            <br><br>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" name="correo" required>
            @error('correo')
                <div class="error">{{ $message }}</div>
            @enderror
            <br><br>

            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" required>
            @error('contrasena')
                <div class="error">{{ $message }}</div>
            @enderror
            <br><br>

            <input type="submit" value="Registrarse">
        </form>
    </div>
</body>
</html>
