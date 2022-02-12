<h1 class="nombre-pagina">Olvide Contraseña</h1>
<p class="descripcion-pagina">Introduce tu email para reestablecer tu contraseña</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/olvide">
<div class="campo">
        <label for="nombre">Tu email</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="Introduce email" 
            />
    </div>

    <input type="submit" value="Enviar" class="boton">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crea una</a>
</div>
