
document.addEventListener('DOMContentLoaded', function(){
    eventListener();

    darkMode();
});

function darkMode(){
    const botonDarkMode = document.querySelector(".dark-mode-boton");
    
    botonDarkMode.addEventListener("click" , function(){
        document.body.classList.toggle("dark-mode");
    });
}

function eventListener(){
    const mobileMenu =document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive );

}

function navegacionResponsive(){
    console.log("desde navegacion responsive");
    const navegacion = document.querySelector('.navegacion');

    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    }else{
        navegacion.classList.add('mostrar');
    }

    //navegacion.classList.toogle("mostrar"); --> hace lo mismo que el If-else 
    //pero con menos codigo.
}