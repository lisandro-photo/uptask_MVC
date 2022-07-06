<div class="contenedor restablecer">
    
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ;?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Restablece tu Password</p>

        <?php include_once __DIR__ . '/../templates/alertas.php' ;?>

        <?php if($mostrar) { ?>

        <form class="formulario" method="post">
            <div class="campo">
                <label for="password">Password:</label>
                <input
                    id="password"
                    type="password"
                    placeholder="Ingresa tu nuevo password"
                    name="password"
                />
            </div>

            <input type="submit" class="boton" value="Guardar cambios">
        </form>

        <?php } ?>

        <div class="acciones">
            <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
            <a href="/crear">¿Aún no tienes una cuenta? Obtener una</a>
        </div>
    </div><!-- Fin de contenedor-sm-->
</div><!-- Fin de contenedor-->