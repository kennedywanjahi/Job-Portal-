<?php
ob_start();
include 'header.php';
if($_SESSION['account_status'] == 0){

echo '<script>window.location="index.php" </script>';
}
 ?>











 
<?php
include 'includes/footer.php';


 ?>
