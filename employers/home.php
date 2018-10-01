<?php
ob_start();
include 'header.php';
if($_SESSION['account_status'] == 0){
redirect("index.php");
}
 ?>












<?php
include 'includes/footer.php';


 ?>
