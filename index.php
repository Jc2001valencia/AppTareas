<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./css/style.css" />
    <title>App de Tareas</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
      
        <div class="signin-signup">
          
          <form method="POST" class="sign-in-form">
            <h2 class="title">Inicio de Sesion</h2>
            <?php
          include"./controlador/login.php";
         
          ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="user" type="text" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="password" type="password" placeholder="Password" />
            </div>
           
            <input name="btningresar" type="submit" value="iniciar" class="btn solid" />

           
             <!--
            <p class="social-text">Or Sign in with social platforms</p>
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
-->
          </form>
          <form method="POST" class="sign-up-form">
            <h2 class="title">Usuario Nuevo</h2>
            <?php
          include"./controlador/registro_users.php";
         
          ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input  name="user" type="text" placeholder="Nombre" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input  name="apellido" type="text" placeholder="Apellido" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="email" type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="password" type="password" placeholder="Password" />
            </div>
            <input name="btnregistro" type="submit" class="btn" value="Registrar" />
            <!--
            <p class="social-text">Or Sign up with social platforms</p>
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
-->
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Nuevo Aqui ?</h3>
            <p>
              Registrate para empezar a guardar tus notas!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registro
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Ya tienes cuenta ?</h3>
            <p>
              Inicia sesion de nuevo!!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Inicio
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="./js/app.js"></script>
  </body>
</html>