<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="build/css/app.css" />
    <title>login Arge corporation  </title>
  </head>
  <body>
    <!-- <header class="header inicio heder_login"  >
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="build/img/logo2.png" alt="imagen de logo">
                </a>

                <nav class="navegacion">
                    <a href="nosotros.html">nosotros</a>
                    <a href="anuncios.html">anuncios</a>
                    <a href="blog.html">blog</a>
                    <a href="contacto.html">loging</a>
                    <a href=""></a>
                </nav>         
            </div>
        </div>

    </header> -->

    <!--<div class=" barra barra-loging">
        <a href="/">
            <img src="build/img/logo2.png" alt="imagen de logo">
        </a>

        <nav class="navegacion">
            <a href="nosotros.html">nosotros</a>
            <a href="anuncios.html">anuncios</a>
            <a href="blog.html">blog</a>
            <a href="contacto.html">loging</a>
            <a href=""></a>
        </nav>

    </div>-->  
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="login.php" method="post" class="sign-in-form">
            <h2 class="title">Iniciar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Iniciar con otras plataformas</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <!--<form action="#" class="sign-up-form">
            <h2 class="title">Registrate</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">registrarse con otras plataformas</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>-->
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Inicia Session</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <!--<button class="btn transparent" id="sign-up-btn">
              Regresar
            </button>-->
          </div>
          <img src="build/img/login_dog2.svg" class="image" alt="" />
        </div>
        <!--<div class="panel right-panel">
          <div class="content">
            <h3>Ya tienes cuenta ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Iniciar
            </button>
          </div>
          <img src="build/img/log2.svg" class="image" alt="" />
        </div>-->
      </div>
    </div>

    <script src="src/js/app.js"></script>
  </body>
</html>
