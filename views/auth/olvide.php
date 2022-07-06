<div class="contenedor olvide">
   
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ;?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recupera tu acceso a UpTask</p>

        <?php include_once __DIR__ . '/../templates/alertas.php' ;?>

        <form class="formulario" action="/olvide" method="post">
            <div class="campo">
                <label for="email">E-Mail:</label>
                <input
                    id="email"
                    type="email"
                    placeholder="Tu E-Mail"
                    name="email"
                />
            </div>

            <input type="submit" class="boton" value="Enviar">
        </form>
        <div class="acciones">
            <a href="/">¿Ya tienes una cuenta? Iniciar Sesión</a>
            <a href="/crear">¿Aún no tienes una cuenta? Obtener una</a>
        </div>
    </div><!-- Fin de contenedor-sm-->
</div><!-- Fin de contenedor-->