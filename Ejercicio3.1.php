<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <form method="POST">Formulario de prueba
        <br>
        <label for="num1">Número 1</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label for="num2">Número 2</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <label for="num1">Número 3</label>
        <input type="number" name="num3" id="num3" required>
        <br><br>
        <button type="submit">Verificar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === "POST") { //Compruebo si el formulario se ha enviado por POST
            //Almacenar en Variables los números puestos en el formulario
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];

            if ($num1 == $num2 && $num2 == $num3) {
                echo "<p>Hay 3 números iguales a $num1</p>";
            } elseif ($num1 == $num2 || $num1 == $num3 || $num2 == $num3)  {
                echo "<p>Hay dos números iguales</p>";
            } else {
                echo "<p>No hay números iguales</p>";
            }
        }
    
    
    ?> 
</body>
</html>