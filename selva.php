<!DOCTYPE html>
<html>
<head>
    <title>Pisteche voice's</title>
    <link rel="stylesheet" type="text/css" href="style2.css">

    <style>
        body {
    background-image: url("selva.jpg");
    background-size: 1500px 780px;
    background-repeat: no-repeat;
    background-position: center;
        }
    </style>

</head>
<body>
    <h1>Ordenar Palabras</h1>

    <?php
    // Palabras a completar
    $palabras = array(
        "lion",
        "snake",
        "cocodrile",
        "monkey",
        "parrot"
    );

    function obtenerPalabraAleatoria($palabras) {
        $indiceAleatorio = array_rand($palabras);
        return $palabras[$indiceAleatorio];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $respuesta = $_POST["respuesta"];
        $palabra = $_POST["palabra"];

        if (strtolower($respuesta) == strtolower($palabra)) {
            echo "<p>¡Respuesta correcta!</p>" ;
        } else {
            echo "<p>Respuesta incorrecta. Intenta de nuevo.</p>";
        }
    }

    $palabraAleatoria = obtenerPalabraAleatoria($palabras);
    ?>

    <p>Ordenar la palabra que esta en ingles: <?php echo str_shuffle($palabraAleatoria); ?></p>

    <form method="POST" action="">
        <input type="hidden" name="palabra" value="<?php echo $palabraAleatoria; ?>">
        <input type="text" name="respuesta" placeholder="Escribe tu respuesta...">
        <button type="submit" onclick="playAudio4()">Enviar</button>
         <audio id="audioPlayer4" src="clap.M4A"></audio>

    <script>
        function playAudio4() {
            var audio = document.getElementById("audioPlayer4");
            audio.play();
        }
    </script>
    </form>
<pw><center>Pistas</center></pw>
    <!-- Reemplazamos el botón por una imagen para reproducir audio -->
    <div class="image-container">
    <img src="cocodrilo.png" alt="Reproducir Audio" id="audioButton" onclick="playAudio1()" width="-200" height="200">
    <audio id="audioPlayer1" src="cocodrilo.MP3"></audio>

    <img src="leon.png" alt="Reproducir Audio" id="audioButton" onclick="playAudio2()" width="-200" height="200">
    <audio id="audioPlayer2" src="leon.MP3"></audio>

    <img src="serpiente.png" alt="Reproducir Audio" id="audioButton" onclick="playAudio3()" width="-200" height="200">
    <audio id="audioPlayer3" src="serpiente.MP3"></audio>

    <img src="mono.png" alt="Reproducir Audio" id="audioButton" onclick="playAudio5()" width="-200" height="200">
    <audio id="audioPlayer5" src="mono.MP3"></audio>

    <img src="loro.png" alt="Reproducir Audio" id="audioButton" onclick="playAudio6()" width="-200" height="200">
    <audio id="audioPlayer6" src="loro.MP3"></audio>


    <script>
        function playAudio1() {
            var audio = document.getElementById("audioPlayer1");
            audio.play();
        }

        function playAudio2() {
            var audio = document.getElementById("audioPlayer2");
            audio.play();
        }

        function playAudio3() {
            var audio = document.getElementById("audioPlayer3");
            audio.play();
        }

        function playAudio5() {
            var audio = document.getElementById("audioPlayer5");
            audio.play();
        }

        function playAudio6() {
            var audio = document.getElementById("audioPlayer6");
            audio.play();
        }
    </script>

</body>
</html>