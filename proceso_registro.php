 <?php

      include 'bd/conexion.php';

       $pNombre = $_POST['txt_pNombre'];
       $sNombre = $_POST['txt_sNombre'];
       $pApellido = $_POST['txt_pApellido'];
       $sApellido = $_POST['txt_sApellido'];
       $edadUs = $_POST['txt_edad'];
       $ciudadUs = $_POST['txt_ciudad'];


      $sql = "INSERT INTO categorias(primerNombre, segundoNombre, primerApellido, segundoApellido, edad, ciudad)
            values ('$pNombre', '$sNombre','$pApellido','$sApellido','$edadUs','$ciudadUs')";
 

        if ($conexion->query($sql) == TRUE) {
          echo "inserción exitosa";
        }
        else{
          echo "inserción rechazada";
        }

    ?>