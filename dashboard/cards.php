<?php require_once "vistas/parte_superior.php"?>
<?php         
    $db2 = mysqli_connect("localhost", "root","your_password", "relocaDB2");
?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Página de Consulta</h1>

    

    <div class="folumario" >
        <form action="/dashboard/cards.php" method="GET" class="folumario">
            <p>Sistema de Identificación Perruno</p>
            Ingresar Nombre a buscar
            <p><Input Type = Text name = "Nombre" ></p>
            <Input Type = Submit value = "Buscar">
        </form>
    </div>
    <br/>

</div>
<!--FIN del cont principal-->
<div class="container container-fluid">
    <?php
        //conexion a la Base de datos (Servidor,usuario,password)
        $conn = mysqli_connect("localhost", "root","your_password", "relocaDB2");
        if (!$conn) {
        die("Error de conexion: " . mysqli_connect_error());
        }
        //(nombre de la base de datos, $enlace) mysql_select_db("RelocaDB",$link);
        //capturando datos
        $v2 = $_REQUEST['Nombre'];
        //conuslta SQL
        $sql = "select * from Perro where Nombre like '".$v2."'";
        $result = mysqli_query($conn, $sql);
        //cuantos reultados hay en la busqueda
        $num_resultados = mysqli_num_rows($result);
        echo "<p>Número de perros encontrados: ".$num_resultados."</p>";
        //mostrando informacion de los perros y detalle
        for ($i=0; $i <$num_resultados; $i++) {
        $row = mysqli_fetch_array($result); echo ($i+1);
    ?>
        
        <table>
        <tr style="padding: 10px">
            <td style="padding: 20px">DNI</td>
            <td style="padding: 20px">Nombre</td>
            <td style="padding: 20px">Raza</td>
            <td style="padding: 20px">Genero</td>
            <td style="padding: 20px">FechaNacimiento</td>
        </tr>

        

        <tr>
            <td style="padding: 20px"> <?php echo $row["DNI"]; ?></td>
            <td style="padding: 20px"> <?php echo $row["Nombre"]; ?></td>
            <td style="padding: 20px"> <?php echo $row["Raza"]; ?></td>
            <td style="padding: 20px"> <?php echo $row["Genero"]; ?></td>
            <td style="padding: 20px"> <?php echo $row["FechaNacimiento"]; ?></td>
        </tr>

    </table>

        <?php 
        }
         ?>
</div>

<?php require_once "vistas/parte_inferior.php"?>