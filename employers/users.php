<?php
ob_start();
include 'header.php';
if($_SESSION['account_status'] == 0){

echo '<script>window.location="index.php" </script>';
}
 ?>
 <?php
 if (isset($_GET['source'])) {
   $source = escape($_GET['source']);
 }else {
   $source = '';
 }
   switch ($source) {
     case 'add_user':
     include 'includes/add_user.php';
     break;
       default:
       include 'includes/view_all_users.php';
       break;
   }


 ?>
