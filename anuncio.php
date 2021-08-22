<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Casa en Venta frente al bosque</h1>

    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">$3,000,000</p>
        <ul class="iconos-caracteristicas">
            <li>
                <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p>3</p>
            </li>
            <li>
                <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p>3</p>
            </li>
            <li>
                <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                <p>4</p>
            </li>
        </ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quod sunt quasi consectetur commodi explicabo, tenetur rerum, blanditiis ratione laboriosam aut odio id accusamus ab magni perferendis nam eos libero. Ipsam doloremque tenetur labore quidem exercitationem rem, laborum totam natus nostrum optio non earum impedit asperiores alias debitis. Quis facilis nemo labore omnis tenetur sed error nulla ea dolor dolorum!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias aliquid voluptatibus magni laudantium reiciendis molestias maxime delectus, porro sapiente eum ratione commodi ut unde fuga officia dolore illum deserunt possimus.</p>
    </div>
</main>

<?php incluirTemplate('footer'); ?>