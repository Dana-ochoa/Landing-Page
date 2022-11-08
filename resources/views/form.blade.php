<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>

    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>

<div class="container">  
  <form action="/contacto" method="post">
    @csrf

    <h4>Contacto</h4>

    <fieldset>
      <label for="nombre">Nombre:  </label>
      <input placeholder="Nombre" type="text"  value = "{{ old('nombre') ?? $nombre }}"><br>
    </fieldset>

    <fieldset>
      <label for="correo">Correo:  </label>
      <input placeholder="Correo" type="email" value="{{ old('correo') ?? $correo }}"><br>
    </fieldset>

    <fieldset>
      <label for="mensaje">Mensaje:  </label>
      <textarea placeholder="Escribe tu comentario aqui...." type="text"  cols="30" rows="10">{{ old('mensaje') }}</textarea><br>
    </fieldset>

    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
    </fieldset>

    </form>
</div>

</body>
