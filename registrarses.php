<!DOCTYPE html>
<html>
  <head>
  <?php session_start() ?>
    <title>snakequiz</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-social@1/bin/bulma-social.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/all.min.css" />
    <style>
      .box {
        background-color: #000000;
        color: #ffffff;
      }
    body {
      background-image: url('img/test.jpeg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }


  section {
    position: relative;
    width: 100%;
    min-height: 100vh;
    overflow: hidden;
}
section:before {
    content: '';
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 1400px;
    background: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,0) 50%, rgba(0,0,0,0.3) 80%, #000 100%);

}
section img {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    pointer-events: none;
}



  
    </style>
  </head>
  <body>
    <form method="post">
    <section class="hero is-fullheight">
      <div class="hero-body">
        <div class="container has-text-centered">
          <div class="column is-4 is-offset-4">
            <div class="box">
              <p class="subtitle is-4">Registrarse en Snakequiz</p>
              <br />
                <div class="field">
                  <p class="control has-icons-left has-icons-right">
                    <input class="input is-medium" type="text" name="Nombre" />
                    <span class="icon is-medium is-left">
                      <i class="fas fa-user"></i>
                    </span>
                  </p>
                </div>
                <div class="field">
                  <p class="control has-icons-left has-icons-right">
                    <input class="input is-medium" type="email" name="Email" />
                    <span class="icon is-medium is-left">
                      <i class="fas fa-envelope"></i>
                    </span>
                  </p>
                </div>
                <div class="field">
                  <p class="control has-icons-left">
                    <input class="input is-medium" type="password" name="Password" />
                    <span class="icon is-small is-left">
                      <i class="fas fa-lock"></i>
                    </span>
                  </p>
                </div>
                <div class="field">
                  <p class="control has-icons-left has-icons-right">
                    <input class="input is-medium" type="tel" name="NúmerodeTeléfono" />
                    <span class="icon is-medium is-left">
                      <i class="fas fa-phone"></i>
                    </span>
                  </p>
                </div>

                <div class="field">
                  <label class="checkbox">
                    <input type="checkbox" required/>
                    Acepto los términos y condiciones
                  </label>
                </div>
                <button class="button is-block is-info is-large is-fullwidth" name="Res" value="Registrarse">Registrarse</button><br />
              </form>
            </div>
            <p class="has-text-grey">
              <a href="iniciarses.php">¿Ya tienes una cuenta? Inicia sesión aquí</a> &nbsp;·&nbsp; 
              <a href="menuprin.php">Volver al inicio</a>
            </p><br>
            <div class="languages select is-small is-rounded">
              <select>
                <option selected>English</option>
                <option>Español</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-foot">
        <div class="container has-text-centered"></div>
      </div>
    </section>

    <script>
      const box = document.querySelector('.box');
      const buttons = document.querySelectorAll('.button');

      window.addEventListener('load', () => {
        box.style.opacity = 0;
        buttons.forEach(button => {
          button.style.transform = 'translateY(20px)';
        });

        setTimeout(() => {
          box.style.opacity = 1;
          box.style.transition = 'opacity 0.5s ease-in-out';
          buttons.forEach(button => {
            button.style.transform = 'translateY(0)';
            button.style.transition = 'transform 0.5s ease-in-out';
          });
        }, 500);
      });
    </script>

<?php

if($_POST['Res']){

    include("conexionlog.php");

    $cnn = Conectar();


    $nom = $_POST['Nombre'];

    $Em = $_POST['Email'];

    $Pass = $_POST['Password'];

    $NT = $_POST['NúmerodeTeléfono'];


    $sql = "INSERT INTO `cliente`(`User`, `Nivel`, `Premiun`, `Id Institucion`, `Contraseña`, `Numero`, `CorreoElectrico`) VALUES ('$nom', '0','0', '12', '$Pass', '$NT', '$Em')";

    mysqli_query($cnn, $sql);

    echo "<script>alert('Se almacenó el Registro')</script>";

}

?>

  </body>
</html>
