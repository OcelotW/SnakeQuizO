<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar una solicitud</title>

   

    <style>
body {
    font-family: sans-serif;
    background-image: url('img/test.jpeg');
    background-repeat: no-repeat;
      background-size: cover;
      background-position: center;

      margin: 0;
    padding: 0;
    background-color: #000000;


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
            <button type="submit">ENVIAR</button>
        </form>
    </div> <br><br><br><br><br><br><br><br>




</body>


<footer>
            <div class="footer-content">

                <p>&copy; 2024 SnakeQuiz.py. Todos los derechos reservados.</p>
                <ul class="socials">
                    <li><a href="#"><img src="img/facebook.png" alt="Facebook"></a></li>
                    <li><a href="#"><img src="img/twitter.png" alt="Twitter"></a></li>
                    <li><a href="#"><img src="img/instagram.png" alt="Github"></a></li>
                </ul>
            </div>
        </footer>

</html>
