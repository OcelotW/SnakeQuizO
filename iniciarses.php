<html>

<?php

ob_start(); 


if ($_POST['IS'] == "Iniciar Session") {


    include("conexionlog.php");


    $cnn = Conectar();


    if (!$cnn) {


        die("Connection failed: ". mysqli_connect_error());


    }


    $Us = $_POST['Email'];


    $passw = $_POST['Pass'];


    $sql = "SELECT * FROM cliente WHERE CorreoElectrico='$Us' AND Contraseña='$passw'";


    $rs = mysqli_query($cnn, $sql) or die(mysqli_error($cnn));


    if (mysqli_num_rows($rs) > 0) {


        $row = mysqli_fetch_array($rs);


        $_SESSION['nom'] = $row[1];


        $_SESSION['Ver'] = 1;


        ob_end_flush(); 

        header("Location: menuprin.php");

        exit; 


    } else {


        echo "<script>alert('Error: usuario o contraseña incorrectos')</script>";


    }

}

?>
  <head>
    <?php
    session_start();
    error_reporting(0);
    ?>
    <title>snakequiz</title>

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet" />

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


    <section class="hero is-fullheight">

      <div class="hero-body">

        <div class="container has-text-centered">

          <div class="column is-4 is-offset-4">

            <div class="box">

              <p class="subtitle is-4">Snakequiz.py</p>

              <br />

              <form method="post">

                <div class="field">

                  <p class="control has-icons-left has-icons-right">

                    <input class="input is-medium" type="email" placeholder="Email" id="Email" name="Email" />

                    <span class="icon is-medium is-left">

                      <i class="fas fa-envelope"></i>

                    </span>

                    <span class="icon is-medium is-right">

                      <i class="fas fa-check"></i>

                    </span>

                  </p>

                </div>

                <div class="field">

                  <p class="control has-icons-left">

                    <input class="input is-medium" type="password" placeholder="Password" id="Pass" name="Pass" />

                    <span class="icon is-small is-left">

                      <i class="fas fa-lock"></i>

                    </span>

                  </p>

                </div>

                <div class="field">

                  <label class="checkbox">

                    <input type="checkbox" />

                    recordarme

                  </label>

                </div>

                <input type="submit" class="button is-block is-info is-large is-fullwidth" id="IS" name="IS" value="Iniciar Session"><br />

                <p class="subtitle is-5">Nuestras redes sociales</p>

                <div class="buttons is-centered" style="margin-bottom: 0;">

                  <a class="button is-medium is-facebook">

                    <span class="icon">

                      <i class="fab fa-facebook-f fa-lg"></i>

                    </span>

                  </a>
                  <a class="button is-medium is-twitter">

                    <span class="icon">

                      <i class="fab fa-twitter fa-lg"></i>

                    </span>

                  </a>

                  <a class="button is-medium is-github">

                    <span class="icon">

                      <i class="fab fa-github fa-lg"></i>

                    </span>

                  </a>
                  <p class="has-text-grey">
              <a href="registrarses.php">Registrarse</a> &nbsp;·&nbsp; <a href="recuperarcon.php">¿Olvidaste tu contraseña?</a> &nbsp;·&nbsp;
              <a href="menuprin.php">Volver al inicio</a>

                 

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

