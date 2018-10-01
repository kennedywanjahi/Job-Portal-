<?php

    require 'header.php';
    include 'functions.php';
    include 'employers/includes/db.php';




?>

<?php
if (isset($_GET['source'])) {
  $source = escape($_GET['source']);
}else {
  $source = '';
}
  switch ($source) {
      default:
      include 'includes/view_all_jobs.php';
      break;
  }

 ?>
<?php if (isset($_GET['job_id'])){
                echo $job_id = escape($_GET['job_id']);
                echo $companyName = escape($_GET['company']);
                echo $jobPosition = escape($_GET['position']);
                if (isset($_SESSION['current_user'])) {
                  $mobile = $_SESSION['user_mobile'];
                  $name = $_SESSION['current_user'];
	                 $query = "INSERT INTO applications SET JobID='$job_id',
                             Company_Name='$companyName', Position='$jobPosition',
                             Name='$name', UserMobile='$mobile'";
                  $applyJob = mysqli_query($connection, $query);
                  confirmQuery($applyJob);
                  echo "<script>alert('Position Appllied successfully');</script>";
                  echo '<script>window.location="jobs.php" </script>';

                    }
      }
?>



        <?php

        include 'includes/footer.php'; ?>
