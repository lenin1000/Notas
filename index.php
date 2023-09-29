<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalcularNotas</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&family=Mooli&family=Roboto+Condensed:ital@0;1&family=Roboto:wght@100;300;400;900&family=Rubik&display=swap" rel="stylesheet">
</head>
<body>

<form action="CalculoNotas.php" method="post">


<div class="container-ti">

<h2 class="titulo">Registro de Notas</h2><br>


</div>

<?php

session_start();

//session_destroy();

if(!isset($_SESSION['data'])){

 $_SESSION['data']= array();

}

if(!isset($_SESSION['data1'])){

    $_SESSION['data1']= array();
   
   }

   if(!isset($_SESSION['data2'])){

    $_SESSION['data2']= array();
   
   }


   if(!isset($_SESSION['data3'])){

    $_SESSION['data3']= array();
   
   }

   if(!isset($_SESSION['data4'])){

    $_SESSION['data4']= array();
   
   }



   if(!isset($_SESSION['data5'])){

    $_SESSION['data5']= array();
   
   }


   if(!isset($_SESSION['data6'])){

    $_SESSION['data6']= array();
   
   }

   if(!isset($_SESSION['data7'])){

    $_SESSION['data7']= array();
   
   }



   if(!isset($_SESSION['data8'])){

    $_SESSION['data8']= array();
   
   }


   
   if(!isset($_SESSION['data9'])){

    $_SESSION['data9']= array();
   
   }

   if(!isset($_SESSION['data10'])){

    $_SESSION['data10']= array();
   
   }

   if(!isset($_SESSION['data11'])){

    $_SESSION['data11']= array();
   
   }





?>

<div class="container-in">

<h2>Ingresa tus Datos</h2>

</div>

<div class="container_registro">

  <div class="regitrosDatos">

<label class="idNombre" for="idNombre">Número de Cédula de identidad de alumno</label><br>

<input class="txtNombre" type="text" name="txtCedula" id="" required><br>

<label  class="idApellido" for="idApellido">Nombre Alumno </label><br>

<input class="txtApellido" type="text" name="txtNombre" id="" required><br>

<label  class="idEdad" for="idEdad">Nota de Matematicas</label><br>

<input class="txtEdad" type="number" name="txtMatematicas" id="" required><br><br>

</div>

<div class="registroEstado">

<label class="idCivil" for="">Continua: </label><br><br>

<label class="idSoltero" for="idSoltero">Nota de Fisíca </label>

<input  class="estadoSoltero" type="number" name="txtFisica" id="" value="" required><br>

<label class="idCasado" for="idCasado">Nota programación </label>

<input  class="estadoCasado" type="number" name="txtProgramacion" id="" value="" required><br>

</div>


<input type="hidden" name="valores" value="<?php echo implode(",", $_SESSION['data'])?>">

<input type="hidden" name="valores1" value="<?php echo implode(",", $_SESSION['data1'])?>">

<input type="hidden" name="valores2" value="<?php echo implode(",", $_SESSION['data2'])?>">

<input type="hidden" name="valores3" value="<?php echo implode(",", $_SESSION['data3'])?>">

<input type="hidden" name="valores4" value="<?php echo implode(",", $_SESSION['data4'])?>">

<input type="hidden" name="valores5" value="<?php echo implode(",", $_SESSION['data5'])?>">

<input type="hidden" name="valores6" value="<?php echo implode(",", $_SESSION['data6'])?>">

<input type="hidden" name="valores7" value="<?php echo implode(",", $_SESSION['data7'])?>">

<input type="hidden" name="valores8" value="<?php echo implode(",", $_SESSION['data8'])?>">

<input type="hidden" name="valores9" value="<?php echo implode(",", $_SESSION['data9'])?>">

<input type="hidden" name="valores10" value="<?php echo implode(",", $_SESSION['data10'])?>">

<input type="hidden" name="valores11" value="<?php echo implode(",", $_SESSION['data11'])?>">


</div>


</div>



<input class="btnAñadir" type="submit" value="Calcular" name="btnAñadir" class="btn btn-primary"><br><br>





</form>
    
</body>
</html>