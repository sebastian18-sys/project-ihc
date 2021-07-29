<?php
require "includes/funciones.php";
incluirTemplate("header", $inicio = true);

require "includes/config/database.php";
$db = conectarDB();

?>

<main class="contenedor seccion">
    <h1>Nuestros mejores Amigos</h1>
</main>

<div class="iconos-nosotros">
    <div class="icono">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-gitlab" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M21 14l-9 7l-9 -7l3 -11l3 7h6l3 -7z" />
        </svg>
        <!--<img src="build/img/icono1.svg" alt="icono seguridad" loaging="lazy"> -->
        <h3>Cariñosos</h3>
        <img src="build/img/icono_dog1.webp" alt="">
    </div>
    <div class="icono">

        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
        </svg>
        <!--<img src="build/img/icono_dog.svg" alt="icono seguridad" loaging="lazy"> -->
        <h3>Amigos</h3>
        <img src="build/img/icono_dog5.webp" alt="">
    </div>
    <div class="icono">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bone" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M15 3a3 3 0 0 1 3 3a3 3 0 1 1 -2.12 5.122l-4.758 4.758a3 3 0 1 1 -5.117 2.297l-.005 -.177l-.176 -.005a3 3 0 1 1 2.298 -5.115l4.758 -4.758a3 3 0 0 1 2.12 -5.122z" />
        </svg>
        <h3>Tiernos</h3>
        <img src="build/img/icono_dog3.webp" alt="">
    </div>
    <div class="icono">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bone" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M15 3a3 3 0 0 1 3 3a3 3 0 1 1 -2.12 5.122l-4.758 4.758a3 3 0 1 1 -5.117 2.297l-.005 -.177l-.176 -.005a3 3 0 1 1 2.298 -5.115l4.758 -4.758a3 3 0 0 1 2.12 -5.122z" />
        </svg>
        <h3>Fieles</h3>
        <img src="build/img/icono_dog4.webp" alt="">
    </div>

</div>

<section class="contenedor projects">
        <div class="projects__grid">
            <article class="projects__item">
                <img src="build/img/dog1.jpg" alt="imagen project" class="projects__img">
                <div class="projects__hover">
                    <h2 class="projects title">DOG</h2>
                    <i class="far fa-file-alt project__icon"></i>
                </div>
            </article>

            <article class="projects__item">
                <img src="build/img/dog2.jpg" alt="imagen project" class="projects__img">
                <div class="projects__hover">
                    <h2 class="projects title">DOG</h2>
                    <i class="far fa-file-alt project__icon"></i>
                </div>
            </article>

            <article class="projects__item">
                <img src="build/img/dog3.jpg" alt="imagen project" class="projects__img">
                <div class="projects__hover">
                    <h2 class="projects title">DOG</h2>
                    <i class="far fa-file-alt project__icon"></i>
                </div>
            </article>

            <article class="projects__item">
                <img src="build/img/dog4.webp" alt="imagen project" class="projects__img">
                <div class="projects__hover">
                    <h2 class="projects title">DOG</h2>
                    <i class="far fa-file-alt project__icon"></i>
                </div>
            </article>

            <article class="projects__item">
                <img src="build/img/dog5.jpg" alt="imagen project" class="projects__img">
                <div class="projects__hover">
                    <h2 class="projects title">DOG</h2>
                    <i class="far fa-file-alt project__icon"></i>
                </div>
            </article>
        </div>
    </section>


<section class="imagen-contacto">
    <h2>Encuntra tu mejor amigo perruno</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore fugiat corporis corrupti </p>

    <a href="sys-clinica/index.php" class="boton_bonito">Iniciar</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/dog3.webp" type="image/webp">
                    <source srcset="build/img/dog3.jpg" type="image/webp">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="entrada-blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Perros bien educados</h4>
                    <p class="informacion-meta">Escrito en: <span>20/10/2021</span></p>

                    <p>
                        Consejo para saber educar a tus mascotas y saber corregirlo y enseñarle
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/dog4.webp" type="image/webp">
                    <source srcset="build/img/dog4.jpg" type="image/webp">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="entrada-blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Mascotas bien alimentadas</h4>
                    <p class="informacion-meta">Escrito en: <span>20/10/2021</span></p>
                    <p>
                        Consejos para tener un buen valance alimenticio en nustras mascotas
                    </p>
                </a>
            </div>
        </article>

    </section>

    <section class="Testimoniales">
        <h3>Testimoniales</h3>

        <div class="testimonial">
            <blockquote>
                El personal comportó de una excelente forma, muy buena etecion y la cena que me ofrecieon cumple con todas mis expectativas.

            </blockquote>

            <p>Argenid David</p>

        </div>


    </section>

</div>

<!--GRAFICAS CON CHART.JS-->
<canvas id="myChart" width="400" height="400"></canvas>

<footer class="footer seccion">
    <div class="contenedor contenedor-footer">
        <nav class="navegacion">
            <a href="nosotros.php">nosotros</a>
            <a href="anuncios.php">anuncios</a>
            <a href="blog.php">blog</a>
            <a href="contacto.php">contacto</a>
        </nav>
    </div>

    <?php $fecha = date('d-m-y'); ?>

    <p class="copyright">todos los derechos reservados <?php echo date('Y'); ?> &copy; </p>
</footer>





<script src="/build/js/bundle.min.js"></script>
<script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                $sql = "SELECT * FROM perro";
                $result = mysqli_query($db, $sql);

                while ($row = mysqli_fetch_array($result)) {
                ?> '<?php echo $row["DNI"] ?>',
                <?php
                }
                ?>
            ],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</body>

</html>