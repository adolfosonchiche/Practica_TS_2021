<!DOCTYPE html>
<html>

<head>
    <title>ts1 cunoc</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="metodos.js"></script>
</head>

<body class="body_c">

    <div class="div">
       <br><br> <label class="label">
            <?php
            $x = 1;
            echo 'BIENVENIDO AL CURSO DE TS'. $x.' CUNOC - USAC -  2021  ' ;
        ?>
        </label> <br><br><br>
        <form method="post">
        <h3 id="ms">
            <?php
                 print "HOLA MUNDO!!";
        ?>
        </h3> <br>
       
    <button class="button-submit" type="button" onclick="mostrarContrasena();">CLIC ME</button>
    </div>

<div class="div">
    <div class="hijo">
        <form>

            <label class="label-img"> <?php echo "SLECCIONE UNA IMGEN (PNG, JPG)" ?> </label> <br> <br>

            <input type="file" id="file" accept="image/*" onchange="mostrar()" /> <br> <br>
            <img id="img" />
            <br>
           
        </form>
    </div>

    <div class="hijo2">

        <!--formulario -->
        <form method="post" action="resultado.php">
            <h3><?php   print "FORMULARIO DATOS PERSONALES"  ?> </h3>
            <label class="label-dat"> Name: </label>
            <input type="text" name="name" class="input-dat" required>
            <br><br>
            <label class="label-dat"> E-mail: </label>
            <input type="text" name="email" class="input-dat" required>
            <br><br>
            <label class="label-dat"> Fecha Nacimiento: </label>
            <input type="date" name="fecha" class="input-dat" required>
            <br><br>
            <label class="label-dat"> GENERO: </label><br><bR>
            <input type="radio" name="gender" value="Mujer" required>MUJER 
            <input type="radio" name="gender" value="Hombre" required>HOMBRE
            <br><br>
            <input type="submit" class="button-submit">
        </form>
    </div>

    </div>

</body>

</html>