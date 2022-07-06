<div class="contenedor crear">
    
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ;?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Crea tu cuenta en UpTask</p>

        <?php include_once __DIR__ . '/../templates/alertas.php' ;?>
        
        <form class="formulario" action="/crear" method="post">
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input
                    id="nombre"
                    type="text"
                    placeholder="Tu Nombre"
                    name="nombre"
                    value="<?php echo $usuario->nombre; ?>"
                />
            </div>

            <div class="campo">
                <label for="email">E-Mail:</label>
                <input
                    id="email"
                    type="email"
                    placeholder="Tu E-Mail"
                    name="email"
                    value="<?php echo $usuario->email; ?>"
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

            <div class="campo">
                <label for="password2">Repetir Password:</label>
                <input
                    id="password2"
                    type="password"
                    placeholder="Repite Tu password"
                    name="password2"
                />
            </div>
    
            <input type="submit" class="boton" value="Crear Cuenta">
        </form>
        <div class="acciones">
            <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
            <a href="/olvide">¿Olvidaste tu password?</a>
        </div>
    </div><!-- Fin de contenedor-sm-->
</div><!-- Fin de contenedor-->