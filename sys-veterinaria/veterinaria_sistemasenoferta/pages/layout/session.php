<?php include ('dbcon.php');
 session_start(); 
 date_default_timezone_set("America/Mexico_City"); 
 setlocale(LC_ALL,"ES");
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
<script>
window.location = "index.php";
</script>
<?php 
}
$session_id=$_SESSION['id'];

$user_query = mysqli_query($con,"select * from usuario where id = '$session_id'")or die(mysql_error());
$user_row = mysqli_fetch_array($user_query);
$user_username = $user_row['usuario'];
   $nombre=$user_row['usuario'];
    
    $imagen=$user_row['imagen'];
    $tipo=$user_row['tipo'];




$empresa_query = mysqli_query($con,"select * from empresa where id_empresa = '1'")or die(mysql_error());
$empresa_row = mysqli_fetch_array($empresa_query);
$imagen_empresa = $empresa_row['imagen'];
$empresa = $empresa_row['empresa'];
$simbolo_moneda = $empresa_row['simbolo_moneda'];
$moneda = $empresa_row['moneda'];
$id=$_SESSION['id'];

//gastos
/*    $query=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='1'")or die(mysqli_error());

    while($row=mysqli_fetch_array($query)){
    $gastos=$row['estado'];
    */
 //}
 //ingresos
   /* $query2=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='2'")or die(mysqli_error());
   
    while($row2=mysqli_fetch_array($query2)){
    $ingresos=$row2['estado'];
 }*/
  //cat_gastos
    /*$query3=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='3'")or die(mysqli_error());
   
    while($row3=mysqli_fetch_array($query3)){
    $cat_gastos=$row3['estado'];
 }*/
   //cat_ingresos
   /* $query4=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='4'")or die(mysqli_error());
    
    while($row4=mysqli_fetch_array($query4)){
    $cat_ingresos=$row4['estado'];
 }*/
    //usuario
    /*$query5=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='5'")or die(mysqli_error());
    
    while($row5=mysqli_fetch_array($query5)){
    $usuario=$row5['estado'];
 }*/
     //docentes
    /*$query10=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='6'")or die(mysqli_error());
    
    while($row10=mysqli_fetch_array($query10)){
    $docentes=$row10['estado'];
 }*/
   //deudas
    /* $query11=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='7'")or die(mysqli_error());
    
    while($row11=mysqli_fetch_array($query11)){
            $deudas=$row11['estado'];
 }
  */
      //alumnos
    /*$query12=mysqli_query($con,"select * from permisos where id_tipo='$id_tipo' and id_menu='8'")or die(mysqli_error());
    
    while($row12=mysqli_fetch_array($query12)){
            $alumnos=$row12['estado'];
 }
   */

     //eliminar
/*    $query6=mysqli_query($con,"select * from permisos_botones where id_tipo='$id_tipo' and id_botones='1'")or die(mysqli_error());
    
    while($row6=mysqli_fetch_array($query6)){
    $eliminar=$row6['estado'];
 }
*/
     //guardar
  /*  $query7=mysqli_query($con,"select * from permisos_botones where id_tipo='$id_tipo' and id_botones='2'")or die(mysqli_error());
    
    while($row7=mysqli_fetch_array($query7)){
    $guardar=$row7['estado'];
 }*/

     //editar
    /*$query8=mysqli_query($con,"select * from permisos_botones where id_tipo='$id_tipo' and id_botones='3'")or die(mysqli_error());
    
    while($row8=mysqli_fetch_array($query8)){
    $editar=$row8['estado'];
 }*/
    //exportar
    /*$query15=mysqli_query($con,"select * from permisos_botones where id_tipo='$id_tipo' and id_botones='4'")or die(mysqli_error());
    
    while($row15=mysqli_fetch_array($query15)){
    $exportar=$row15['estado'];
 }

*/
 
?>