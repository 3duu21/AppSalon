<h1 class="nombre-pagina">Olvide mi Password</h1>
<p class="descripcion-pagina">Ingresa el correo electronico para cambiar la password</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>

<form action="/olvide" class="formulario" method="post">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Tu Email">
    </div>

    <input type="submit" value="Enviar Intrucciones" class="boton">

    <div class="acciones">
        <a href="/">¿Ya tienes una cuenta? Inicia Sesion</a>
        <a href="/crear-cuenta">¿Aun no tienes una cuenta? Crear una</a>
    </div>
</form>