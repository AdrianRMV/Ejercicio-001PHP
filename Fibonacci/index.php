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


    <h2>FIBONACCI </h2>


    <fieldset>
        <legend>Numero de REPETICION sucesión fibonacci</legend>
        <form method="POST" action="index.php">

            <input type="text" name="cantNum">
            <input type="submit" name="" value="Enviar">

        </form>
    </fieldset>

    <br>


    <fieldset>
        <legend>Sucesión fibonacci</legend>
        <form method="POST" action="index.php">

            <?php

            $numero = 1;
            $numeroAnterior = 0;
            $fibonacci = 1;

            if (isset($_POST['cantNum'])) {
                // Se obtiene la cantidad de calificaciones que quiere ingresar el usuario
                $cantNum = $_POST['cantNum'];
                // Se crea un for para que se ingresen tantas calificaciones como el usuario quiera
                for ($i = 0; $i < $cantNum; $i++) {
                    $fibonacci = $numero + $numeroAnterior;
                    $numeroAnterior = $numero;
                    $numero = $fibonacci;
                    echo $fibonacci . '<br>';
                }
                echo "<input type='submit'value='Enviar'>";
            }

            ?>

        </form>

</body>

</html>
