<?php
    require "includes/funciones.php";
    incluirTemplate("header");
 ?>

    <main class="contenedor seccion contenido-cetrado">
        <h1>Titulo Pagina</h1>

        
        
        <picture>
            <picture>
                <source srcset="build/img/destacada.webp" type="image/webp">
                <source srcset="build/img/destacada.webp" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada.webp" alt="anuncio">
            </picture>
        </picture>
        <p class="informacion-meta">Escrito el: <span>30/05/2021</span> po: <span>Admin</span></p>

        <div class="resumen-propiedad">
            <p class="precio">$ 3,000,000</p>


            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque sit laboriosam ipsa perspiciatis consequuntur maxime animi rem. Totam labore dolorum, ratione rem excepturi animi nobis itaque perferendis error fugiat eaque
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quasi veritatis odio eius adipisci ex alias voluptatum tempora perferendis ipsum, mollitia nemo, voluptas accusamus vitae voluptates odit. Sed, deserunt voluptatum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam laborum adipisci et natus sit. Quo, maxime magni voluptates, illum at totam esse eligendi earum alias ipsam consequatur enim itaque voluptas!
            </p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem enim possimus, nam cum natus rem iure, fugit est quae deleniti quia quam fuga repudiandae rerum corporis tenetur autem libero incidunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, quam culpa necessitatibus eos temporibus unde, laborum porro dicta aliquid laboriosam excepturi. Sit amet, odit voluptas excepturi est dolorum voluptatum qui!S</p>
        </div>
    </main>


    <?php  
      incluirTemplate("footer");
?>