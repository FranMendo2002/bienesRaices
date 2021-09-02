<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesión</h1>

    <form action="" class="formulario">
        <fieldset>
            <legend>Email y Password</legend>

            <label for="email">E-mail</label>
            <input id="email" type="email" placeholder="Tu email">

            <label for="password">Password</label>
            <input id="password" type="text" placeholder="Tu password">
        </fieldset>

        <input type="submit" value="Iniciar Sesión" class="boton boton-verde">

    </form>
</main>

<?php incluirTemplate('footer'); ?>