<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones pt2</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>


    <h2>Escriba sus calificaciones por favor </h2>

    <!-- Formulario para saber la cantidad de calificaciones que quiere evaluar el usuario -->
    <fieldset>
        <legend>Numero de calificaciones</legend>
        <form method="POST" action="index.php">

            <input type="text" name="cantInputs">
            <input type="submit" name="" value="Enviar">

        </form>
    </fieldset>

    <br>

    <!-- Formulario para ingresar las calificaciones -->
    <fieldset>
        <legend>Calificaciones</legend>
        <form method="POST" action="recibir.php">

            <?php

            if (isset($_POST['cantInputs'])) {
                // Se obtiene la cantidad de calificaciones que quiere ingresar el usuario
                $cantInputs = $_POST['cantInputs'];
                // Se crea un for para que se ingresen tantas calificaciones como el usuario quiera
                for ($i = 0; $i < $cantInputs; $i++) {
                    echo "<input type='text' name='calificaciones[]'><br>";
                }
                echo "<input type='submit'value='Enviar'>";
            }

            ?>

        </form>

</body>

</html>