<?php
if (isset($_POST['add_job'])) {
  $companyName = mysqli_real_escape_string($connection, $_POST['category']);
  $jobPosition = mysqli_real_escape_string($connection, $_POST['jobPosition']);
  $jobDescription = mysqli_real_escape_string($connection, $_POST['jobDescription']);
  $jobQualifications = mysqli_real_escape_string($connection, $_POST['jobQualifications']);
  $jobStatus = mysqli_real_escape_string($connection, $_POST['jobStatus']);
  $companyEmail = mysqli_real_escape_string($connection, $_POST['companyEmail']);
  $companyTelephone = mysqli_real_escape_string($connection, $_POST['companyTelephone']);
          $query = "INSERT INTO jobs(`Company`, `Position`, `Description`, `Qualifications`, `Status`, `Email`, `Telephone`)";
          $query .="VALUES ('{$companyName}', '{$jobPosition}', '{$jobDescription}', '{$jobQualifications}', '{$jobStatus}', '{$companyEmail}',
          '{$companyTelephone}')";
           $add_job_query= mysqli_query($connection, $query);

           if(!$add_job_query){
             die("QUERY FAILED" .mysqli_error($connection));
           }
           echo "<h1>Job Opening Added successfully</h1>" ;
           echo '<script>window.location="jobs.php" </script>';
}






 ?><h3 class="page-header" style="text-align:center;">Add Open Job Position</h3>
<form action="" method="post" enctype="multipart/form-data">
  <label for="category">Hiring Company</label>
<select class="form-control" name="category">
  <?php

          $query = "SELECT * FROM employers";
          $select_categories = mysqli_query($connection,$query);
          while($row = mysqli_fetch_assoc($select_categories )) {
          $cat_id = $row['Id'];
          $cat_title = $row['Name'];
              echo "<option value='$cat_title'>{$cat_title}</option>";
          }
          ?>
</select>
</div>
  <div class="form-group">
    <label for="jobPosition">Position Looking to hire in</label>
    <input type="text" name="jobPosition" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="jobDescription">Job Description</label>
    <input type="text" name="jobDescription" class="form-control" value="" required>
  </div>
  <div class="form-group">
    <label for="jobQualifications">Job Qualifications</label>
    <input type="text" name="jobQualifications" class="form-control" placeholder="">
  </div>
  <div class="form-group">
    <label for="jobStatus">Job Position Status</label> <br>
    <select class="form-control" name="jobStatus">
      <option value="1">Position Available</option>
      <option value="0">Position Unavailable</option>
    </select>
  </div>
  <div class="form-group">
    <label for="companyEmail">Company Email</label>
    <input type="email" name="companyEmail" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="companyTelephone">Company Telephone Contacts</label>
    <input type="number" name="companyTelephone" class="form-control" required>
  </div>
  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="add_job" value="ADD JOB">
  </div>

</form>
