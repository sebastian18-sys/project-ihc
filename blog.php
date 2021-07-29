<?php
    require "includes/funciones.php";
    incluirTemplate("header");
 ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/webp">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="entrada-blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terra en el tecjo de tu casa</h4>
                    <p>Escrito en: <span>20/10/2021</span></p>

                    <p>
                        Consejo para contruir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero

                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/webp">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="entrada-blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p>Escrito en: <span>20/10/2021</span></p>
                    <p>
                        Consejo para contruir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                    </p>
                </a>
            </div>  
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/webp">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="entrada-blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p>Escrito en: <span>20/10/2021</span></p>
                    <p>
                        Consejo para contruir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                    </p>
                </a>
            </div>  
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/webp">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="entrada-blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p>Escrito en: <span>20/10/2021</span></p>
                    <p>
                        Consejo para contruir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                    </p>
                </a>
            </div>  
        </article>
        
    </main>


    <?php  
      incluirTemplate("footer");
?>