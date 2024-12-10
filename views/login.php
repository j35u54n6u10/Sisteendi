<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../css/login_register.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="index.html" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="../assets/loguito.png" alt="Date un gustico logo" />
                <h4>Date un gustico</h4>
              </div>

              <div class="heading">
                <h2>Bienvenido de nuevo</h2>
                <h6>¿No estás registrado todavía?</h6>
                <a href="#" class="toggle">Regístrate</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Nombre</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Contraseña</label>
                </div>

                <input type="submit" value="Iniciar Sesión" class="sign-btn" />

                <!-- <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p> -->
              </div>
            </form>

            <form action="index.html" autocomplete="off" class="sign-up-form">
              <div class="logo">
                <img src="../assets/loguito.png" alt="Date un gustico logo" />
                <h4>Date un gustico</h4>
              </div>

              <div class="heading">
                <h2>Comencemos</h2>
                <h6>¿Ya tienes una cuenta?</h6>
                <a href="#" class="toggle">Inicia sesión</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Nombre</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Correo</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Contraseña</label>
                </div>

                <input type="submit" value="Registrarse" class="sign-btn" />

                <!-- <p class="text">
                    Al registrarme, acepto los
                  <a href="#">Términos y condiciones</a> y las
                  <a href="#">Políticas de privacidad</a>
                </p> -->
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="../assets/carrusel-dona-uno.webp" class="image img-1 show" alt="" />
              <img src="../assets/carrusel-dona.webp" class="image img-2" alt="" />
              <img src="../assets/carrusel-dona-tres.webp" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2></h2>
                  <h2></h2>
                  <h2></h2>
                </div>
            </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>


    <!-- TODO Agregar footer -->

    <!-- Javascript file -->
    <script src="../js/login_register.js"></script>
  </body>
</html>