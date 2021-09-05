<!DOCTYPE html>
<html>

<head>
    <title>resultado</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


    <?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

     $name = $email = $edad =  $genero = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ?>
    <?php
    // collect value of input field
    $name = $_POST['name'];
    $email = $_POST['email'];
    $fecha = $_POST['fecha'];
    $genero = test_input($_POST['gender']) ;


    if ($genero == "female") {
        $genero = "Mujer";
    } else {
        $genero = 'Hombre';
    }

        $a = explode("-", $fecha);

        $fechaActual = date('Y');

        $edad = $fechaActual - $a[0];
        ?>
    <div class="div">
        <h1>DATOS</h1>
        <center>
            <table border="6" width="700">
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>E-mail</th>
                    <th>Genero</th>
                    <th>Link del curso TS1</th>
                </tr>
                <tr>
                    <td> <?php echo $name; ?> </td>
                    <td> <?php echo $edad . ' años'; ?> </td>
                    <td> <?php echo $email; ?> </td>
                    <td> <?php echo $genero; ?> </td>
                    <td> <a
                            href="https://srlabs.a2hosted.com/rs-humhub/index.php?r=space%2Fspace&cguid=270d2153-695a-4cdf-830c-bbecab84ce4e">Ir
                            al curso</a> </td><!--  -->
                </tr>

            </table>
        </center>
    </div>
    <?php  
}
?>

</body>

</html>