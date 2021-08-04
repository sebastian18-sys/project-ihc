


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];




//$target_dir = "images/";


	$img_imagen_galeria1="";
		$img_imagen_galeria2="";

if (!empty($_FILES['imagen_galeria1']['name'])){
    
      
$target_dir = "../layout/images/";
	$target_file = $target_dir.basename($_FILES["imagen_galeria1"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["imagen_galeria1"]["tmp_name"]);
	if($check!==false) {
		echo "archivo es una imagen - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "el archivo no es una imagen.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "lo siento, el archivo ya existe.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["imagen_galeria1"]["size"]>500000){
		echo "lo imagen_baner, tu archivo es demasiado grande.";
		$uploadok=0;
	}
	
	

		if(move_uploaded_file($_FILES["imagen_galeria1"]["tmp_name"], $target_file)){
			
	$img_imagen_galeria1=basename($_FILES["imagen_galeria1"]["name"]);
	

	mysqli_query($con,"update configuracion set imagen_galeria1='$img_imagen_galeria1' ")or die(mysqli_error());





	
	
		} else{
			echo "No se pudo subir.";
		}



   
}
else{



}






if (!empty($_FILES['imagen_galeria2']['name'])){
    
      
$target_dir = "../layout/images/";
	$target_file = $target_dir.basename($_FILES["imagen_galeria2"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["imagen_galeria2"]["tmp_name"]);
	if($check!==false) {
		echo "archivo es una imagen - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "el archivo no es una imagen.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "lo siento, el archivo ya existe.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["imagen_galeria2"]["size"]>500000){
		echo "lo imagen_baner, tu archivo es demasiado grande.";
		$uploadok=0;
	}
	
	

		if(move_uploaded_file($_FILES["imagen_galeria2"]["tmp_name"], $target_file)){
			
	$img_imagen_galeria2=basename($_FILES["imagen_galeria2"]["name"]);
	

	mysqli_query($con,"update configuracion set imagen_galeria2='$img_imagen_galeria2' ")or die(mysqli_error());


	


	
	
		} else{
			echo "No se pudo subir.";
		}



   
}
else{



}



		

	echo "<script>document.location='galeria.php'</script>";
?>
