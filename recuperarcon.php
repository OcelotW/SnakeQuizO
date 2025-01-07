<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperar contraseña</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-social@1/bin/bulma-social.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/all.min.css">
  <link rel="icon" type="image/x-icon" href=img/favicon.ico>
  <style>
      .box {
        background-color: #000000;
        color: #ffffff;
      }
    body {
      background-color: #314056;
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
            <p class="subtitle is-4">Recuperar Contraseña</p>
            <p class="subtitle is-4">Necesitamos verificar sus datos para proceder con la recuperación de su contraseña. 
              Pronto recibirá un correo electrónico o un mensaje de texto (SMS) con los pasos necesarios.</p>
            <form>
              <div class="field">
                <p class="control has-icons-left has-icons-right">
                  <input class="input is-medium" type="email" placeholder="Email o Teléfono">
                  <span class="icon is-medium is-left">
                    <i class="fas fa-envelope"></i>
                  </span>
                </p>
              </div>
              <button class="button is-block is-info is-large is-fullwidth">Enviar</button><br>
            </form>
          </div>
          <p class="has-text-grey">
            <a href="iniciarses.php">¿Recuerdas tu contraseña? Inicia sesión aquí</a> &nbsp;·&nbsp;
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
    document.addEventListener('DOMContentLoaded', function() {
      const box = document.querySelector('.box');
      const buttons = document.querySelectorAll('.button');

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
          <script src="menu.js"></script>
</body>
</html>
