<?php
ob_start();
include 'header.php';
if($_SESSION['account_status'] == 0){

redirect("index.php");
}
 ?>
 <?php
 if (isset($_GET['source'])) {
   $source = escape($_GET['source']);
 }else {
   $source = '';
 }
   switch ($source) {
     case 'add_job':
     include 'includes/add_job.php';
     break;
     case 'view_applicants':
     include 'includes/job_applicants.php';
     break;
       default:
       include 'includes/view_all_jobs.php';
       break;
   }


 ?>












<?php
include 'includes/footer.php';


 ?>
