<?php 

$title = "Index";
include "../logic/logickoneksi.php";
include "../template/templateheader.php";
// if(!isset($_SESSION['login'])){
//   header('Location: ../index/index.php');
// }
?>
  
<?php 
include "../template/templatelogin.php";
include "../template/templatenavbar.php";
include "../template/templatenav.php";
?>
  
<?php 
include "../template/jumbotron.php";
include "../template/footer.php";
include "../template/modallogout.php";

?>
  
<?php 

include "../template/templatefooter.php";

?>