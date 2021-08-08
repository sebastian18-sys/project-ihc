<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');


          if(isset($_REQUEST['cid']))
            {
              $cid=$_REQUEST['cid'];
            }
            else
            {
            $cid=$_POST['cid'];
          }



  mysqli_query($con,"delete from tipo_usuario where id_tipo='$cid'")or die(mysqli_error());
    mysqli_query($con,"delete from permisos where id_tipo='$cid'")or die(mysqli_error());
      mysqli_query($con,"delete from permisos_botones where id_tipo='$cid'")or die(mysqli_error());
    echo "<script type='text/javascript'>alert('Eliminado correctamente!');</script>";
  echo "<script>document.location='tipo_usuarios.php'</script>";  
  
?>