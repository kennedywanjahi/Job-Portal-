<table width= '700' class="table table-bordered table-hover table-condensed">
  <thead>
    <tr>
      <th>Job Id</th>
      <th>Company Name</th>
      <th>Position</th>
      <th>Description</th>
      <th>Qualifications</th>
      <th>Status</th>
      <th>Company Email</th>
      <th>Company Telephone</th>
      <th>Posted</th>


    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM jobs ";
    $select_orders =
    mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($select_orders)){
      $job_id = $row['Id'];
      $companyName = $row['Company'];
      $jobPosition = $row['Position'];
      $jobDescription = $row['Description'];
      $jobQualifications = $row['Qualifications'];
      $jobStatus = $row['Status'];
      $companyEmail = $row['Email'];
      $companyTelephone = $row['Telephone'];
      $posted = $row['Date_posted'];
      echo "<tr>";
                  echo "<td>{$job_id}</td>";
                  echo "<td>{$companyName}</td>";
                  echo "<td>{$jobPosition}</td>";
                  echo "<td>KSH {$jobDescription}</td>";
                  echo "<td>KSH {$jobQualifications}</td>";
                  echo "<td>{$jobStatus}</td>";
                  echo "<td>{$companyEmail}</td>";
                  echo "<td>{$companyTelephone}</td>";
                  echo "<td>{$posted}</td>";
                  echo "<td><a href='jobs.php?source=job_details&job_id={$job_id}'>Details</a></td>";
                  echo "<td><a href='jobs.php?delete={$job_id}'>Delete</a></td>";





      echo "</tr>";


    }
     ?>
  </tbody>
</table>




<?php
if (isset($_GET['delete'])) {
  $jobId = $_GET['delete'];
  $query = "DELETE FROM jobs WHERE Id = $jobId";
  $deleteCompany = mysqli_query($connection, $query);
  echo '<script>window.location="jobs.php" </script>';
}
 ?>
