<h1 class="nombre-pagina">Recuperar Contraseña</h1>
<p class="descripción-pagina">Escribe tu nueva contraseña</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<?php if($error) return; ?>

<form class="formulario" method="POST">
<div class="campo">
    <label for="password">Contraseña</label>
    <input 
        type="password"
        id="password"
        name="password"
        placeholder="Nueva contraseña"
        />
</div>
<input type="submit" class="boton" value="Enviar nueva contraseña">

</form>

<div class="acciones">
    <a href="/">¿Ya tienes cuenta?Iniciar Sesión</a>
    <a href="/crear-cuenta">Regístrate</a>
</div>