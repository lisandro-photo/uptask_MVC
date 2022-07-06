<div class="contenedor login">
   
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ;?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesión</p>

        <?php include_once __DIR__ . '/../templates/alertas.php' ;?>

        <form class="formulario" action="/" method="post" novalidate>
            <div class="campo">
                <label for="email">E-Mail:</label>
                <input
                    id="email"
                    type="email"
                    placeholder="Tu E-Mail"
                    name="email"
                />
            </div>

            <div class="campo">
                <label for="password">Password:</label>
                <input
                    id="password"
                    type="password"
                    placeholder="Tu password"
                    name="password"
                />
            </div>

            <input type="submit" class="boton" value="Iniciar Sesión">
        </form>
        <div class="acciones">
            <a href="/crear">¿Aún no tienes una cuenta? Obtener una</a>
            <a href="/olvide">¿Olvidaste tu password?</a>
        </div>
    </div><!-- Fin de contenedor-sm-->
</div><!-- Fin de contenedor-->