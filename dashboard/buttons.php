<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Página de Registro Canino</h1>
    <?php
    //BAse de datos
    require "../includes/config/database.php";

    $db= conectarDB();


    //Arreglo con mensaje de errores 
    $errores =[];

    //consultar para obtener vendedores 
    /*$consulta= "SELECT *FROM vendedores";
    $resultado = mysqli_query($db, $consulta);*/
    ////////////////////////////////

    
    /*$titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento ='';
    $vendedorId = '';*/

    $Codigo ='';
    $Nombre ='';
    $FechNac ='';
    $Raza ='';
    $Genero ='';
    $Foto ='';

    //Ejecutar codigodespues de enviar el formuladiro
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/

        /*$titulo = $_POST["titulo"];
        $precio = $_POST["precio"];
        $descripcion = $_POST["descripcion"];
        $habitaciones = $_POST["habitaciones"];
        $wc = $_POST["wc"];
        $estacionamiento = $_POST["estacionamiento"];
        $vendedorId = $_POST["vendedor"];
        $creado= date("Y-m-d");*/

        $Codigo = $_POST["Codigo"];
        $Nombre = $_POST["Nombre"];
        $FechNac = $_POST["FechNac"];
        $Raza = $_POST["Raza"];
        $Genero = $_POST["Genero"];
        $Foto = $_POST["Foto"];

        //EXPRESIONES REGULARES
        $er1= "/[a-z]/";
        $er2= "/[a-zA-Z]{2}[0-9]{2}/";

        $rta1= preg_match($er1, $Nombre);
        $rta2= preg_match($er2, $Codigo);
        if($rta1==false){
            echo '<script language="javascript">alert("Solo Ingrese letras");</script>';
        }
        if($rta2==false){
            echo '<script language="javascript">alert("Debe ingresar dos letras y dos numeros");</script>';
        }
        //INCRIPTANDO EL CODIGO(DNI)
        //$hash = password_hash($Codigo, PASSWORD_DEFAULT, ['cost'=>10] );

        if(!"$Codigo"){
            $errores[]= "Debes añadir un Codigo";
        }
        if(!"$Nombre"){
            $errores[]= "El Nombre es obligatorio";
        }
        /*if(strlen($descripcion) < 50){ //mide la extencion del string
            $errores[]= "La descripcion es obligatoria y bede tener minimo 50 carcteres";
        }*/
        if(!"$Raza"){
            $errores[]= "La raza es obligatorio";
        }
        /*if(!"$Genero"){
            $errores[]= "El genero es obligatorio";
        }*/

        /*echo "<pre>";
        var_dump($errores);
        echo "</pre>";*/


        //revisar que el arreglo de errores este vacia 
        if(empty($errores)){ //empty: revisa si esta vacio el arreglo
            
            //insertar bd

            $query ="INSERT INTO perro (DNI, Nombre, Raza, Genero, FechaNacimiento, Foto) 
                     VALUES ('$Codigo', '$Nombre', '$Raza', '$Genero', '$FechNac', '$Foto' )";
    
            //echo $query;
            
            $resultado = mysqli_query($db, $query);

            echo $resultado;
            
            /*($resultado){
                header("Location: /admin.php");
                
            }*/
        }
    }
 ?>

    <main class="contenedor seccion">
        <!--<h1>Crear</h1>
        <a href="/admin" class="boton boton-verde">Volver</a>
        -->
        <?php foreach ($errores as $error): ?>
        <div class="alerta errorLlenado" style="background-color: rgb(226, 85, 85); color:black; width:200px; border-radius: 5px; text-align: center";  >
            <?php echo $error; ?>
        </div>
        

        <?php endforeach; ?>

        <form  class="formulario" method="POST" action="/dashboard/buttons.php">
            <fieldset class="form-cont">
                
                <legend>Informacion General</legend>
                
                Ingresar Codigo <br/>
                <Input name = "Codigo" Type Text class="inputs" placeholder=" Codigo" style="padding:3px; border-radius:10px; text-align: center"></P>
                Ingresar Nombre <br/>
                <Input name = "Nombre" Type Text class="inputs" placeholder=" Nombre" style="padding:3px; border-radius:10px; text-align: center"></P>
                
            </fieldset>
            <br/>
            <fieldset class="form-cont">
                <legend>Caracteristicas </legend>
                Fecha de Nacimiento <br/>
                <Input name= "FechNac" Type = "Date"></P>
                Genero <br/>
                <Input name="Genero" Type = "Radio" value=1> Macho
                <Input name= "Genero" Type = "Radio" value=0> Hembra</P>
        
                Seleccione Raza <br/>
                <Select name = "Raza">
                 <Option value = "Pitbull"> Pitbull
                 <Option value = "Bulldog"> Bulldog
                 <Option value = "Shichu"> Shichu
                 <Option value = "Pequines"> Pequines
                 <Option value = "San Bernardo"> San Bernardo
                 <Option value = "Chiguahua"> Chiguahua
                </Select></P>
                Subir Foto <br/>
                <Input Type = "file" name = "Foto">
                <br/><br/>
                <Input name= "Registrar" Type = Submit value = "Registrar" class="btn-form boton boton-verde" style="color: #fff; background-color: #1cc88a; border-color: #1cc88a; border-radius: .35rem;
     font-weight: 400; padding: .375rem .75rem; font-size: 1rem; border: 1px solid transparent;">
                <Input Type = Submit value = "Cancelar" class="btn-form boton-amarillo" style="color: #fff; background-color: #b5a6a6; border-color: #b5a6a6; border-radius: .35rem;
     font-weight: 400; padding: .375rem .75rem; font-size: 1rem; border: 1px solid transparent;"></P>
            </fieldset> 
        </form>
    </main>

    



</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>