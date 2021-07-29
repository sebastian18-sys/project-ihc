<?php
    require "includes/funciones.php";
    incluirTemplate("header");
 ?>
 
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            
            <div class="imgamen-nosotros" >
                <picture>
                    <source srcset="build/img/nosotros.jpg" type="image/jpg">
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <img loading="lazy" src="build/img/nosotros.webp" alt="img nosotros">
                </picture>
            </div>
    
            <div class="texto-nosotros">
                <P class="titulo-contenido">
                    25 Años de Experiencia
                </P>

                <p class="contenido-texto">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore voluptas eos, atque unde ut perferendis quis rerum nulla, blanditiis nesciunt excepturi adipisci facere eveniet consequatur quisquam? A, quod totam? Unde!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quaerat, asperiores distinctio labore tempore aperiam omnis voluptas quod sed facilis voluptatibus aut similique pariatur autem ratione nostrum et, officia ipsam?
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos libero consectetur vero ut, perferendis impedit molestiae, obcaecati iusto saepe omnis, nihil error. Nostrum, dignissimos libero eius aliquam odio ab totam.
                </p>
    
            </div>
        </div>

        
    </main>

    <section class="contenedor seccion">
        <h1>Sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loaging="lazy"> 
                <h3>seguridad</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur neque unde suscipit voluptatum corporis, recusandae quia quos sit incidunt consequatur, sapiente perspiciatis. Cupiditate ut explicabo sit debitis labore voluptates quos!</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono seguridad" loaging="lazy"> 
                <h3>Precio</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur neque unde suscipit voluptatum corporis, recusandae quia quos sit incidunt consequatur, sapiente perspiciatis. Cupiditate ut explicabo sit debitis labore voluptates quos!</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono seguridad" loaging="lazy"> 
                <h3>Tiempo</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur neque unde suscipit voluptatum corporis, recusandae quia quos sit incidunt consequatur, sapiente perspiciatis. Cupiditate ut explicabo sit debitis labore voluptates quos!</p>
            </div>

        </div>
        
    </section>


    <?php  
    incluirTemplate("footer");
?>