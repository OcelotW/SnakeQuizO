<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar una solicitud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-social@1/bin/bulma-social.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/all.min.css" />
    <link rel="icon" type="image/x-icon" href=img/favicon.ico>

    <style>
body {
    font-family: sans-serif;
    background-color: #314056;

      margin: 0;
    padding: 0;



}


.social-icons {
            margin-top: 10px;
        }
        .social-icons a {
            color: white;
            font-size: 24px;
            margin: 0 10px;
            text-decoration: none;
        }


        .container {
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
        }



        label {
            display: block;
            margin-bottom: 20px;
            font-weight: bold;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .header h2 {
            margin: 0;
        }

        .header a {
            text-decoration: none;
            color: #007bff;
        }


        footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px 0;
    position: relative;
    bottom: 0;
    width: 100%;
}

.footer-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.footer-content p {
    margin: 0;
    padding: 0;
    font-size: 14px;
}

.footer-content .socials {
    list-style: none;
    padding: 0;
    margin: 10px 0 0 0;
    display: flex;
}

.footer-content .socials li {
    margin: 0 10px;
}

.footer-content .socials li a img {
    width: 24px;
    height: 24px;
}


.back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #444;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 24px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease-in-out;
            z-index: 1000;
        }
        .back-to-top:hover {
            background-color: #666;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Soporte de Snakequiz.py</h2>
            <a href="menuprin.php">Volver al inicio</a>
        </div>
        <h1>Enviar una solicitud</h1>
        <center><p>No importa de qué se trate, ¡estamos aquí para ayudarte! <br>
        ¡Envía una solicitud! A menos que tu solicitud caiga por un portal, te responderemos pronto.</p></center>
        <br>
        <form>
            <div class="form-group">
                <label for="tipo-solicitud">1. SELECCIONA UN TIPO DE SOLICITUD</label>
                <select id="tipo-solicitud" name="tipo-solicitud">
                    <option value="facturacion">Aplicación web</option>
                    <option value="otro">Otro</option>
                </select>
            </div> <br>

            <div class="form-group">
                <label for="asunto">ASUNTO*</label>
                <input type="text" id="asunto" name="asunto" placeholder="Asunto de tu solicitud" required>
            </div> <br>
            <div class="form-group">
                <label for="consulta">SELECCIONA TU CONSULTA*</label>
                <select id="consulta" name="consulta">
                    <option value="cuenta">Problemas con alguna pregunta</option>
                    <option value="pagos">Problemas con iniciar sesión</option>
                    <option value="soporte-tecnico">Soporte técnico</option>
                    <option value="otro">Otro</option>
                </select> 
            </div> <br>
            <div class="form-group">
                <label for="descripcion">DESCRIPCIÓN*</label>
                <textarea id="descripcion" name="descripcion" placeholder="Describe tu problema con detalle" required></textarea>
            </div> <br>
            <div class="form-group">
                <label for="adjuntos">ARCHIVOS ADJUNTOS</label>
                <input type="file" id="adjuntos" name="adjuntos" multiple>
            </div> <br>
            <button type="submit">ENVIAR</button> <br><br>

            <h3>Nuestra oficina:</h3>
            <p>C. Cuevas 70, 2840079 Rancagua, O'Higgins</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13203.396579391047!2d-70.73612787355037!3d-34.175774412944946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96634342188fb3a1%3A0xc54017472f5d991d!2sAIEP%20Rancagua!5e0!3m2!1ses-419!2scl!4v1719354620394!5m2!1ses-419!2scl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </form>
    </div> <br><br><br><br><br><br><br><br>




</body>


<footer>
            <div class="footer-content">

                <p>&copy; 2024 SnakeQuiz.py. Todos los derechos reservados.</p>
                <div class="social-icons">
            <a href="https://www.instagram.com/tu_usuario" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.twitter.com/tu_usuario" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.github.com/tu_usuario" target="_blank"><i class="fab fa-github"></i></a>
        </div>
            </div>
        </footer>


        <button class="back-to-top" onclick="scrollToTop()">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        function checkVisibility() {
            const storyTexts = document.querySelectorAll('.story-text');
            storyTexts.forEach(text => {
                const rect = text.getBoundingClientRect();
                const isVisible = (rect.top >= 0 && rect.bottom <= window.innerHeight);
                if (isVisible) {
                    text.classList.add('visible');
                }
            });
        }

        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        window.addEventListener('scroll', checkVisibility);
        window.addEventListener('resize', checkVisibility);
        
        checkVisibility();
    </script>

</html>
